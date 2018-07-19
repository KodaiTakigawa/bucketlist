<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dream;
use App\User;
use App\LinkedSocialAccount;
use Auth;
use Response;

class MainController extends Controller
{
    //
    function index(){
      return view('index');
    }

    function mypage(Request $request){
      $user_id = Auth::user()->id;
      $mydreams = Dream::where('user_id', $user_id)->where('achievement', 'f')->get();
      $achievementNum = Dream::where('user_id', $user_id)->where('achievement', 't')->count();
      return view('mypage', ['mydreams' => $mydreams, 'achievementNum' => $achievementNum]);
    }

    function mydream(Request $request){
      $dream = Dream::find($request->dream_id);
      return view('mydream',['dream' => $dream]);
    }

    function addMydream(Request $request){
      return view('add_mydream');
    }

    function createMydream(Request $request){
      $request->validate([
        'title' => 'required|max:255',
      ]);
      $dream = new Dream;
      $form = $request->all();
      unset($form['_token']);
      if ($request->detail == NULL) {
        $form['detail'] = " ";
      }
      $dream->good = 0;
      $dream->achievement = 'f';
      $dream->fill($form)->save();
      return redirect('/mypage');
    }

    function editMydream(Request $request){
      $dream_id = $request->dream_id;
      $dream = Dream::find($dream_id);
      $dream = Dream::where('user_id', Auth::user()->id)
                ->where('id', $dream_id)
                ->first();
      if (isset($dream) == NULL) {
        return '404';
      }
      return view('mydream_edit', ['mydream' => $dream]);
    }

    function updateMydream(Request $request){
      $request->validate([
        'title' => 'required|max:255',
      ]);
      $dream_id = $request->dream_id;
      $dream = Dream::where('user_id', Auth::user()->id)
                ->where('id', $dream_id)
                ->first();
      if ($request->action == 'save') {
        $form = $request->all();
        if ($request->detail == NULL) {
          $form['detail'] = " ";
        }
        unset($form['_token']);
        $dream->fill($form)->save();
      } elseif ($request->action == 'delete') {
        $dream->delete();
      }
      return redirect()->action('MainController@mypage');
    }

    function achieveDream(Request $request){
      $user_id = Auth::user()->id;
      // update achievemet
      $achievedDream = Dream::find($request->dream_id);
      $achievedDream->achievement = 't';
      $achievedDream->save();
      //for show
      $achievementNum = Dream::where('user_id', $user_id)->where('achievement', 't')->count();
      $achievedDreams = Dream::where('user_id', $user_id)->where('achievement', 't')->get();
      return view('achievedlist', ['achievedDreams' => $achievedDreams, 'achievementNum' => $achievementNum]);
    }

    function achievedList(){
      $user_id = Auth::user()->id;
      $achievementNum = Dream::where('user_id', $user_id)->where('achievement', 't')->count();
      $achievedDreams = Dream::where('user_id', $user_id)->where('achievement', 't')->get();
      return view('achievedlist', ['achievedDreams' => $achievedDreams, 'achievementNum' => $achievementNum]);
    }

    function findDreams(Request $request){
      $request->validate([
        'search' => 'required',
      ]);
      $search = $request->search;
      $dreams = Dream::where('title', 'ilike', '%' . $search . '%')->with('user')->get();
      return view('find_dreams', ['dreams' => $dreams]);
    }

    function findDreamsDetail(Request $request){
      $dream = Dream::where('id', $request->id)->with('user')->first();
      return view('find_dreams_detail',['dream' => $dream]);
    }

    function findDreamsProfile(Request $request){
      $user_id = $request->id;
      $user = User::where('id', $user_id)->first();
      $dreams = Dream::where('user_id', $user_id)->where('achievement', 'f')->get();
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

    function countGoods(Request $request){
      if ($request->ajax()) {
        // Ajaxである
        $dream_id = $request->dream_id;
        $dream = Dream::find($dream_id);
        $good_num = $dream->good + 1;
        $form =['good' => $good_num];
        $dream->fill($form)->save();
        return $good_num;
      } else {
        // Ajaxではない
        return view('index');
      }
    }

    function updateProfile(Request $request){
        $request->validate([
          'name' => 'required|max:127',
        ]);
        $name = $request->name;
        $description = $request->description;
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $form =[
          'name' => $name,
          'description' => $description,
        ];
        if ($request->detail == NULL) {
          $form['description'] = " ";
        };
        $user->fill($form)->save();
        return redirect()->action('MainController@mypage');

    }

}
