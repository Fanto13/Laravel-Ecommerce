<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = [
         'user_id', 'item_id', 'quantity',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public  function getUser() {
        return $this->user;
    }
    
    public function item(){

        return $this->belongsTo('App\Item');
    }

     public  function getItem() {
        return $this->item;
    }
}
