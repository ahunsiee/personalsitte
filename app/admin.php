<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin extends Model
{

	public function getmessages(){
		$msg=DB::table('admins')->get();
			return $msg;
		

	}
public function insertmessage($name,$email,$comment){
	DB::table('admins')->insert(
		[
			'fullname'=>$name,
			'email'=>$email,
			'comment'=>$comment,
		]);


	}
}


