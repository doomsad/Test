<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Student;
use DB;
class MyController extends Controller
{
    public function store(Request $r)
    {
    	$student = new Student();
    	$student->stName = $r->name;
    	$student->stMajor = $r->major;
    	$student->save();
    	//return DB::table('students')->orderBy('created_at', 'desc')->first();
    	//return response ()->json ("OK");
    }
}
