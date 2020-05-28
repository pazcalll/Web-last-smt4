<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = Users::all();
        if (count($data)>0) {
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Kosong!";
            return response($res);
        }
    }
    public function getteacher()
    {
        $data = Users::where('status','teacher')->get();
        return view('lists/teacher')->with('data',$data);
    }
    public function getstudent()
    {
        $data = Users::where('status','student')->get();
        return view('lists/student')->with('data',$data);
    }
    public function getclass($classid)
    {
        $data = Users::where('class_id',$classid)->get();
        return view('lists/classes')->with('data',$data)->with('classid',$classid);
    }
}
