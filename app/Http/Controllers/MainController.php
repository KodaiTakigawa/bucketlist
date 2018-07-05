<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dream;
use App\User;
use App\LinkedSocialAccount;

class MainController extends Controller
{
    //
    function index(){
      return view('index');
    }

    function mypage(Request $request){
      $mydreams = Dream::where('user_id', 8)->where('achievement', 'f')->get();
      $achivementNum = Dream::where('user_id', 8)->where('achievement', 't')->count();
      return view('mypage', ['mydreams' => $mydreams, 'achivementNum' => $achivementNum]);
    }

    function mydream(Request $request){
      $dream = Dream::where('id', $request->id)->first();
      return view('mydream',['dream' => $dream]);
    }

    function addMydream(Request $request){
      return view('add_mydream');
    }

    function createMydream(Request $request){
      $dream = new Dream;
      $form = $request->all();
      unset($form['_token']);
      $dream->good = 0;
      $dream->achievement = 'f';
      $dream->fill($form)->save();
      return redirect('/mypage');
    }

    function achivedList(Request $request){
      $user_id = $request->id;
      $user = User::where('id', $user_id)->first();
      // update achievemet
      $achievedDream = Dream::find($request->dreamId);
      $achievedDream->achievement = 't';
      $achievedDream->save();

      $achievementNum = Dream::where('user_id', $user_id)->where('achievement', 't')->count();
      $achievedDreams = Dream::where('user_id', $user_id)->where('achievement', 't')->get();
      return view('achivedlist', ['achievedDreams' => $achievedDreams, 'achievementNum' => $achievementNum, 'user' => $user]);
    }

    function findDreams(Request $request){
      $search = $request->search;
      $dreams = Dream::where('title', 'like', '%' . $search . '%')->with('user')->get();
      return view('find_dreams', ['dreams' => $dreams]);
    }

    function findDreamsDetail(Request $request){
      $dream = Dream::where('id', $request->id)->with('user')->first();
      return view('find_dreams_detail',['dream' => $dream]);
    }

    function findDreamsProfile(Request $request){
      $user_id = $request->id;
      $user = User::where('id', $user_id)->first();
      $dreams = Dream::where('user_id', $user_id)->get();
      $achievementNum = Dream::where('user_id', $user_id)->where('achievement', 't')->count();
      $twitter_id = LinkedSocialAccount::where('user_id', $user_id)->first()->provider_id;
      return view('find_dreams_profile', ['dreams' => $dreams, 'achievementNum' => $achievementNum, 'user' => $user, 'twitter_id' => $twitter_id]);
    }

    function findDreamsProfileachivedList(Request $request){
      $user_id = $request->id;
      $user = User::where('id', $user_id)->first();
      $achievementNum = Dream::where('user_id', $user_id)->where('achievement', 't')->count();
      $achievedDreams = Dream::where('user_id', $user_id)->where('achievement', 't')->get();
      return view('find_dreams_profile_achivedlist', ['achievedDreams' => $achievedDreams, 'achievementNum' => $achievementNum, 'user' => $user]);
    }

}
