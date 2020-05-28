<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
use App\Scores;
use App\Users;

class AdminController extends Controller
{
    public function __controller()
    {
        $this->middleware('auth');
        // if ($this->session->has('password')) {
        //     $view = view('admin');
        //     return $view;
        // }
        // else{
        //     return view('login');
        // }
    }
    public function index(Request $request)
    {
        // dd($request->all());
        $view = view('admin');
        return $view;
    }
    public function getsubjectlist()
    {
        return view('subjectselector');
    }
    public function getsubject($subjectid)
    {
        return view('classselector')->with('subjectid',$subjectid);
    }
    
    public function getscore($subjectid, $classid)
    {
        $data = DB::table('scores')
            ->join('users', 'users.ID', '=', 'scores.ID')
            ->join('subjects', 'subjects.SUB_ID', '=', 'scores.SUB_ID')
            ->where([['scores.SUB_ID',$subjectid],['users.CLASS_ID',$classid]])
            ->select('scores.*', 'users.CLASS_ID','subjects.SUB_NAME')
            ->get();
        return view('scoreofclass')
        ->with('subjectid',$subjectid)
        ->with('data',$data)
        ->with('classid',$classid);
        // ->with('subjectname',);
    }
    
    public function addid()
    {
        $data= DB::table('class')->select('class.*')->get();
        return view('adder/addid')->with('data',$data);
    }
    
    public function saving(Request $request)
    {
        // inserting data
        DB::table('users')->insert([
            'USERNAME'      => $request->username,
            'ID'            => $request->id,
            'STATUS'        => $request->status,
            'CLASS_ID'      => $request->classid,
            'PASSWORD'      => $request->username,
            'ADDRESS'       => null,
            'PHONE'         => null,
            'MOTHERNAME'    => null,
            'FATHERNAME'    => null
        ]);
        return redirect('admin');
    }

    public function getaddscoreform($subjectid, $classid)
    {
        $data= DB::table('users')
            ->where('class_id',$classid)
            ->select('ID','USERNAME')
            ->get();
        return view('adder/addscore')
            ->with('subjectid',$subjectid)
            ->with('classid',$classid)
            ->with('data',$data);
    }
    public function savescore(Request $request)
    {
        // inserting score
        DB::table('scores')->insert([
            'USERNAME'      => $request->username,
            'ID'            => $request->id,
            'SUB_ID'        => $request->sub_id,
            'QUIZ1'         => $request->quiz1,
            'QUIZ2'         => $request->quiz2,
            'MID_EXAM'      => $request->midterm,
            'QUIZ3'         => $request->quiz3,
            'LAST_EXAM'     => $request->lastexam,
            'AVERAGE'       => $request->average
        ]);
        return redirect('admin/lists/subjects/'.$request->sub_id.'/'.$request->classid);
    }
    public function deleteuser($id)
    {
        Users::where('ID',$id)->delete();
        return back();
    }
    public function deletescore($scoreid)
    {
        DB::table('scores')
            ->where('SCOREID',$scoreid)
            ->delete();
        return back();
    }
    public function geteditscoreform($scoreid,$classid)
    {
        $data = DB::table('scores')
            ->join('users', 'users.ID', '=', 'scores.ID')
            ->join('subjects', 'subjects.SUB_ID', '=', 'scores.SUB_ID')
            ->where([['users.CLASS_ID',$classid],['scores.SCOREID',$scoreid]])
            ->select('scores.*', 'users.CLASS_ID','subjects.SUB_ID')
            ->get();
        return view('edit/scoreedit')
            ->with('data',$data)
            ->with('classid',$classid)
            ->with('scoreid',$scoreid);
    }
    public function scoreupdate($scoreid, Request $request)
    {
        // updating score
        DB::table('scores')->where('SCOREID',$scoreid)->update([
            'QUIZ1'         => $request->quiz1,
            'QUIZ2'         => $request->quiz2,
            'MID_EXAM'      => $request->midterm,
            'QUIZ3'         => $request->quiz3,
            'LAST_EXAM'     => $request->lastexam,
            'AVERAGE'       => $request->average
        ]);
        return redirect('admin/lists/subjects/'.$request->sub_id.'/'.$request->classid);
    }
    public function logout(Request $request)
    {
        // $request->session->forget('password');
        return view('auth/login2');
    }
}
