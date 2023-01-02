<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{   
    protected $table = "cards";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'n_card', 'ccv', 'user_id', 
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    
    public function item(){

        return $this->belongsTo('App\Item');
    }
    
    public  function getUser() {
        return $this->user;
    }
}
