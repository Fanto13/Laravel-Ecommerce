<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'image', 'category', 'n_warehouse' ,'price', 'title', 'description'  
    ];
    
    public function Purchase() {
        return $this->hasMany('App\Purchase');
    }
    
    
    public function Basket() {
        return $this->hasMany('App\basket');
    }
    public  function getUser() {
        return $this->user;
    }
}

