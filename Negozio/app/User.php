<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname', 'email', 'password','birth_date', 'sex', 'IsAdmin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function card() {
        return $this->hasMany('App\Card');
    }
    public function basket() {
        return $this->hasOne('App\Basket');
    }
    public function order() {
        return $this->hasMany('App\Order');
    }

    public function getFullName() {
        return $this->name . " " . $this->surname;
    }

    //        return $this->hasOne('App\<nome del modello>');

}
