<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable = [
      'order',
      'time',
      'status',
      'user_id',
   ];

   public function user()
   {
   	return $this->belongsTo(User::class);
   	//return $this->belongsTo('App\User');
   }
}
