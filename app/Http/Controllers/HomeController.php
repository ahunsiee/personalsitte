<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homme');
     }


     public function getmsg( admin $admin){
       $r= $admin->getmessages();
         // echo '<pre>';
         // print_r($r);
         // echo '<pre>';
       return view ('message',['admin'=>$r]);





     }
public function create(Request $req, admin $admin){
        if($req->isMethod('get')){

          return view('project');
        }
      else{

        $validate= $req->validate(['fullname'=>'required|min:5' , 'email'=>'required|unique:admins|email' , 'comment'=>'required|min:4' , 'phone'=>'required|max:11]']);
          echo "form successfully submitted";
            $name=$req->input('fullname');
            $email=$req->input('email');
            $comment=$req->input('comment');
             $admin->insertmessage($name,$email,$comment);
                session()->flash('status','done');
                return redirect('/msg');

            }

        }
    }


