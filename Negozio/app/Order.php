<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'user_id',
        ];
    
        public function user() {
            return $this->belongsTo('App\User');
        }
        
        public function purchase() {
            return $this->hasMany('App\Purchase');
        }
        public  function getUser() {
            return $this->user;
        }
}