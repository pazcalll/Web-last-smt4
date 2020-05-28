<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Scores;

class ExportController extends Controller
{
    public function exportscore()
    {
        return Excel::download(new Exporter, 'Scores.csv');
    }
}

class Exporter implements FromCollection
{
    public function collection()
    {
        $head = array(
            'SCOREID',
            'ID',
            'USERNAME',
            'SUB_ID',
            'QUIZ1',
            'QUIZ2',
            'MID_EXAM',
            'QUIZ3',
            'LAST_EXAM',
            'AVERAGE'
        );
        return Scores::all();
    }
}
