<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Personalsite extends Controller

{

	function form(Request $req){
		return view('project');
	}

   	function submit_details( Request $req){

   		$validate= $req->validate(['fullname'=>'required|min:5' , 'email'=>'required|email' , 'comment'=>'required|min:4' , 'phone'=>'required|max:11]']);
   		return redirect( url('/greeting'));

   	}
}
