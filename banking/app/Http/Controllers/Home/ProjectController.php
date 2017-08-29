<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
    	return view('home.index');
    }
    public function registers(Request $res)
    {
    	$name = $res->input('Name');
    	$email =  $res->input('Email');
    	$pwd =  $res->input('Password');
    	$phone_number = $res->input('Phone_Number');
    	$list = DB::insert('insert into user(name,email,password,phone_number) values(?,?,?,?)',[$name,$email,$pwd,$phone_number]);
    	if($list){
    		echo "1";
    	}else{
    		echo "10";
    	}
    }
}
