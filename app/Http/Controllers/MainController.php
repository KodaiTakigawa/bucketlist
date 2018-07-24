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
      $mydreams = Dream::where('user_id', $user_id)->where('achievement', false)->orderBy('created_at', 'desc')->paginate(10);
      $achievement_num = Dream::where('user_id', $user_id)->where('achievement', true)->count();

      $sort = $request->sort;
      return view('mypage', ['mydreams' => $mydreams, 'achievement_num' => $achievement_num, 'sort' => $sort]);
    }

    function mydream(Request $request){
      $dream = Dream::find($request->dream_id);
      $tweets = $this->searchFromTwitter($dream);
      $twitter_screen_name = $tweets['twitter_screen_name'];
      $tweets_for_dream = $tweets['tweets_for_dream'];
      
      return view('mydream',['dream' => $dream, 'twitter_screen_name' => $twitter_screen_name, 'tweets_for_dream' => $tweets_for_dream]);
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
      $dream->achievement = false;
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
      $achieved_dream = Dream::find($request->dream_id);
      $achieved_dream->achievement = true;
      $achieved_dream->save();
      //for show
      $achievement_num = Dream::where('user_id', $user_id)->where('achievement', true)->count();
      $achieved_dreams = Dream::where('user_id', $user_id)->where('achievement', true)->get();
      return view('achievedlist', ['achieved_dreams' => $achieved_dreams, 'achievement_num' => $achievement_num]);
    }

    function achievedList(Request $request){
      $user_id = Auth::user()->id;
      $achievement_num = Dream::where('user_id', $user_id)->where('achievement', true)->count();
      $achieved_dreams = Dream::where('user_id', $user_id)->where('achievement', true)->orderBy('created_at', 'desc')->paginate(10);
      $sort = $request->sort;
      return view('achievedlist', ['achieved_dreams' => $achieved_dreams, 'achievement_num' => $achievement_num, 'sort' => $sort]);
    }

    function findDreams(Request $request){
      $request->validate([
        'search' => 'required',
      ]);
      $search = $request->search;
      $dreams = Dream::where('title', 'ilike', '%' . $search . '%')->with('user')->orderBy('created_at', 'desc')->paginate(10);
      $sort = $request->sort;
      return view('find_dreams', ['dreams' => $dreams, 'sort' => $sort]);
    }

    function findDreamsDetail(Request $request){
      $dream_id = $request->query('id');
      $dream = Dream::where('id', $dream_id)->with('user')->first();
      $tweets = $this->searchFromTwitter($dream);
      $twitter_screen_name = $tweets['twitter_screen_name'];
      $tweets_for_dream = $tweets['tweets_for_dream'];
      return view('find_dreams_detail',['dream' => $dream, 'twitter_screen_name' => $twitter_screen_name, 'tweets_for_dream' => $tweets_for_dream]);
    }

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

    function findDreamsProfileachivedList(Request $request){
      $user_id = $request->id;
      $user = User::where('id', $user_id)->first();
      $achievement_num = Dream::where('user_id', $user_id)->where('achievement', true)->count();
      $achieved_dreams = Dream::where('user_id', $user_id)->where('achievement', true)->paginate(10);
      $sort = $request->sort;
      return view('find_dreams_profile_achivedlist', ['achieved_dreams' => $achieved_dreams, 'achievement_num' => $achievement_num, 'user' => $user, 'sort' => $sort]);
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


    // twitterから夢に関するtweetを検索
    function searchFromTwitter($dream){
      $user_id = $dream->user_id;
      $twitter_screen_name = LinkedSocialAccount::where('user_id', $user_id)->first()->screen_name;

      //twitterから検索
      // 設定
      $bearer_token = env('BEARER_TOKEN') ;	// ベアラートークン ;	// リクエストURL
      $request_url = 'https://api.twitter.com/1.1/search/tweets.json';

      // userに応じて、tweet取得
      $request_url = $request_url . '?q=from%3A' . $twitter_screen_name;
      //. '%20%23' . 'Dreamers' . '%20%23' . $dream->title;

      // リクエスト用のコンテキスト
      $context = array(
        'http' => array(
          'method' => 'GET' , // リクエストメソッド
          'header' => array(			  // ヘッダー
            'Authorization: Bearer ' . $bearer_token ,
          ),
        ),
      );

      // cURLを使ってリクエスト
      $curl = curl_init() ;
      curl_setopt( $curl, CURLOPT_URL, $request_url ) ;	// リクエストURL
      curl_setopt( $curl, CURLOPT_HEADER, true ) ;	// ヘッダーを取得する
      curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, $context['http']['method'] ) ;	// メソッド
      curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false ) ;	// 証明書の検証を行わない
      curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true ) ;	// curl_execの結果を文字列で返す
      curl_setopt( $curl, CURLOPT_HTTPHEADER, $context['http']['header'] ) ;	// ヘッダー
      curl_setopt( $curl, CURLOPT_TIMEOUT, 5 ) ;	// タイムアウトの秒数
      $res1 = curl_exec( $curl ) ;
      $res2 = curl_getinfo( $curl ) ;
      curl_close( $curl ) ;

      // 取得したデータ
      $json = substr( $res1, $res2['header_size'] ) ;	// 取得したデータ(JSONなど)
      // $header = substr( $res1, 0, $res2['header_size'] ) ;	// レスポンスヘッダー (検証に利用したい場合にどうぞ)

      // JSONを変換
      $obj = json_decode( $json ) ;	// オブジェクトに変換

      // HTML用
      $html = '' ;

      // 検証用にレスポンスヘッダーを出力 [本番環境では不要]
      // $html .= '<h2>取得したデータ</h2>' ;
      // $html .= '<p>下記のデータを取得できました。</p>' ;
      // $html .= 	'<h3>ボディ(JSON)</h3>' ;
      // $html .= 	'<p><textarea rows="8">' . $json . '</textarea></p>' ;
      // $html .= 	'<h3>レスポンスヘッダー</h3>' ;
      // $html .= 	'<p><textarea rows="8">' . $header . '</textarea></p>' ;
      // $html .= '<p>' . $obj->statuses[0]->text . '</p>';

      // HTMLを出力
      //echo $html ;

      for($i = 0; $i <= count($obj->statuses)-1; $i++){
        $tweets_for_dream[$i]['text'] = $obj->statuses[$i]->text;
        $tweets_for_dream[$i]['created_at'] = date("Y/m/d", strtotime($obj->statuses[$i]->created_at) + 32400); //In Japan +32400

        if (isset($obj->statuses[$i]->entities->media[0]->media_url_https)) {
          $tweets_for_dream[$i]['media_url'] = $obj->statuses[$i]->entities->media[0]->media_url_https;
        }
      }

      $tweets = ['twitter_screen_name' => $twitter_screen_name, 'tweets_for_dream' => $tweets_for_dream];

      return $tweets;
    }

}
