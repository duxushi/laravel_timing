<?php

namespace App\Http\Controllers;
use App\User;
use App\Text;
class MyController extends Controller
{
    public function getLogin()
    {
	   	return view('login');
    }

    public function ajaxLogin()
    {
    	$username=$_GET['username'];
    	$pwd=$_GET['pwd'];
    	$user=new User();
    	$obj=$user->where('username',$username)->get();
    	if ($obj)
    	{
    		echo 1;
    	}
    	else
    	{
    		echo 0;
    	}
    }

    public function show()
    {
        $text=new Text();
        $data=$text->all();
        print_r($data);die;
    	return view('show',$data);
    }
}
