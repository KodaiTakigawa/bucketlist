<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dream extends Model
{
  protected $fillable = [
      'title', 'detail', 'good', 'achievement', 'user_id',
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }
    //
}
