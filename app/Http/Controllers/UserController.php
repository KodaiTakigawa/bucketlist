<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dream;
use App\User;
use App\LinkedSocialAccount;
use Auth;
use Response;

class UserController extends Controller
{
    /**
     * show my page
     */
    function mypage(Request $request){
        $user_id = Auth::user()->id;
        $mydreams = Dream::where('user_id', $user_id)->where('achievement', false)->orderBy('created_at', 'desc')->paginate(10);
        $achievement_num = Dream::where('user_id', $user_id)->where('achievement', true)->count();
  
        $sort = $request->sort;
        return view('mypage', ['mydreams' => $mydreams, 'achievement_num' => $achievement_num, 'sort' => $sort]);
    }

    /**
     * show achieved list
     */
    function achievedList(Request $request){
        $user_id = Auth::user()->id;
        $achievement_num = Dream::where('user_id', $user_id)->where('achievement', true)->count();
        $achieved_dreams = Dream::where('user_id', $user_id)->where('achievement', true)->orderBy('created_at', 'desc')->paginate(10);
        $sort = $request->sort;
        return view('achievedlist', ['achieved_dreams' => $achieved_dreams, 'achievement_num' => $achievement_num, 'sort' => $sort]);
    }

    /**
     * update my profile
     */
    function updateProfile(Request $request){
        $request->validate([
          'name' => 'required|max:127',
        ]);
        $name = $request->name;
        $description = $request->description;
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $form = [
          'name' => $name,
          'description' => $description,
        ];
        if ($description == NULL) {
          $form['description'] = " ";
        };
        $user->fill($form)->save();
        return response()->json(200);
    }

}