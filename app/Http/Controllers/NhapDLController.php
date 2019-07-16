<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhapDLController extends Controller
{
	public function xuat(){
		return view('lab2.form');
	}
    public function nhapDL(Request $req){
    	$name=$req->name;
    	$age=$req->age;
    	$address=$req->address;
    	$lop=$req->lop;
    	$array= array('name' =>$name ,'age' =>$age ,'address' =>$address ,'lop' =>$lop  );
    	return view('welcome',compact('array'));
    }
}
