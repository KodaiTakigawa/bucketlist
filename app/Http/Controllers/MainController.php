<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    function index(){
      return view('index');
    }

    function mypage(){
      return view('mypage');
    }

    function mydream(){
      return view('mydream');
    }

    function addMydream(){
      return view('add_mydream');
    }

    function achivedList(){
      return view('achivedlist');
    }

    function findDreams(){
      return view('find_dreams');
    }

    function findDreamsDetail(){
      return view('find_dreams_detail');
    }

    function findDreamsProfile(){
      return view('find_dreams_profile');
    }

    function findDreamsProfileachivedList(){
      return view('find_dreams_profile_achivedlist');
    }





}
