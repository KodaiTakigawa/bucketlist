<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dream extends Model
{
  protected $fillable = [
      'title', 'detail', 'good', 'achivement', 'user_id',
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function getIcon(){
    $user_icon = $this->user->icon_url;
    return $user_icon;
  }
    //
}
