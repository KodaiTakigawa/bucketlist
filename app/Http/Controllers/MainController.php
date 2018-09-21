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
      $random_dreams = Dream::inRandomOrder()->take(5)->get();
      return view('index', ['random_dreams' => $random_dreams]);
    }

    /**
     * find other dreams
     */
    function findDreams(Request $request){
      $request->validate([
        'search' => 'required',
      ]);
      $search = $request->search;
      $dreams = Dream::where('title', 'ilike', '%' . $search . '%')->with('user')->orderBy('created_at', 'desc')->paginate(10);
      $sort = $request->sort;
      return view('find_dreams', ['dreams' => $dreams, 'sort' => $sort]);
    }

      /**
       * show dream detail
       */
    function findDreamsDetail(Request $request){
      $dream_id = $request->query('id');
      $dream = Dream::where('id', $dream_id)->with('user')->first();
      $tweets = $this->searchFromTwitter($dream);
      $twitter_screen_name = $tweets['twitter_screen_name'];
      $tweets_for_dream = $tweets['tweets_for_dream'];
      return view('find_dreams_detail',['dream' => $dream, 'twitter_screen_name' => $twitter_screen_name, 'tweets_for_dream' => $tweets_for_dream]);
    }

    /**
     * find profile
     */
    function findDreamsProfile(Request $request){
      $user_id = $request->id;
      $user = User::where('id', $user_id)->first();
      $dreams = Dream::where('user_id', $user_id)->where('achievement', false)->orderBy('created_at', 'desc')->paginate(10);
      $achievement_num = Dream::where('user_id', $user_id)->where('achievement', true)->count();
      $twitter_id = LinkedSocialAccount::where('user_id', $user_id)->first()->provider_id;
      $twitter_screen_name = LinkedSocialAccount::where('user_id', $user_id)->first()->screen_name;
      $sort = $request->sort;
      return view('find_dreams_profile', ['dreams' => $dreams, 'achievement_num' => $achievement_num, 'user' => $user, 'twitter_id' => $twitter_id, 'twitter_screen_name' => $twitter_screen_name, 'sort' => $sort]);
    }

    /**
     * find profile achieved list
     */
    function findDreamsProfileachivedList(Request $request){
      $user_id = $request->id;
      $user = User::where('id', $user_id)->first();
      $achievement_num = Dream::where('user_id', $user_id)->where('achievement', true)->count();
      $achieved_dreams = Dream::where('user_id', $user_id)->where('achievement', true)->paginate(10);
      $sort = $request->sort;
      return view('find_dreams_profile_achivedlist', ['achieved_dreams' => $achieved_dreams, 'achievement_num' => $achievement_num, 'user' => $user, 'sort' => $sort]);
    }

    /**
     * count gooods
     */
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

}
