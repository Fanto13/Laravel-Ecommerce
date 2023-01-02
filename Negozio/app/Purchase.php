<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
      'order_id','quantity', 'item_id',  
    ];

    public function item() {
        return $this->belongsTo('App\Item');
    }

    public function order() {
      return $this->belongsTo('App\Order');
  }
}
