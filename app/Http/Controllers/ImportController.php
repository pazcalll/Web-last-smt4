<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Arr;
use App\Scores;
use App\User;

class ImportController extends Controller
{
    //
    public function importpage()
    {
        return view('adder/importscoreform');
    }
    public function importprocess(Request $request)
    {
        // $this->validate($request,[
        //     'file'       =>  'required|mimes:xlsx,xls,csv'
        // ]);
        $path = file($request->file->getRealPath());
        // dd($path)->all();
        $data=Excel::toArray(new Importer, request()->file('file'));
        // dd($data);
        // return collect(head($data))
        // ->each(function ($row, $key) {
            // DB::table('scores')
            //     ->where('SCOREID', $row['id'])
            //     ->update($row, ['id']);
        // });
        if ($data > 0) {
            foreach ($data as $key => $value) {
                // DD($value);
                foreach ($value as $row) {
                    // dd($row);
                    $insert_data = array(
                        'SCOREID'       =>  $row['scoreid'],
                        'ID'            =>  $row['id'],
                        'USERNAME'      =>  $row['username'],
                        'SUB_ID'        =>  $row['sub_id'],
                        'QUIZ1'         =>  $row['quiz1'],
                        'QUIZ2'         =>  $row['quiz2'],
                        'QUIZ3'         =>  $row['quiz3'],
                        'MID_EXAM'      =>  $row['mid_exam'],
                        'LAST_EXAM'     =>  $row['last_exam'],
                        'AVERAGE'       =>  $row['average']
                    );
                    DB::table('scores')
                        ->where('SCOREID', $row['scoreid'])
                        ->delete();
                    DB::table('scores')
                        ->insert($insert_data);
                }
            }
        }
        return redirect('admin/importpage');
        // foreach ($data as $row ) {
        //     DB::table('scores')->where('SCOREID',$row['scoreid'])->update($row);
        // }
        // return back();
        // if ($data->count() > 0) {
        //     foreach($data->toArray() as $key => $value){
        //         foreach ($value as $row ) {
        //             $insert_data[] = array(
        //                 'SCOREID'       =>  $row[0],
        //                 'ID'            =>  $row[1],
        //                 'USERNAME'      =>  $row[2],
        //                 'SUB_ID'        =>  $row[3],
        //                 'QUIZ1'         =>  $row[4],
        //                 'QUIZ2'         =>  $row[5],
        //                 'QUIZ3'         =>  $row[6],
        //                 'MID_EXAM'      =>  $row[7],
        //                 'LAST_EXAM'     =>  $row[8]
        //             );
        //         }
        //     }
        // }
    }
}

class Importer implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // print_r( $row);
        return new Scores([
            'SCOREID'       =>  $row["scoreid"],
            'ID'            =>  $row["id"],
            'USERNAME'      =>  $row["username"],
            'SUB_ID'        =>  $row["sub_id"],
            'QUIZ1'         =>  $row["quiz1"],
            'QUIZ2'         =>  $row["quiz2"],
            'MID_EXAM'      =>  $row["mid_exam"],
            'QUIZ3'         =>  $row["quiz3"],
            'LAST_EXAM'     =>  $row["last_exam"],
            'AVERAGE'       =>  $row['average']
        ]);
    }
}
