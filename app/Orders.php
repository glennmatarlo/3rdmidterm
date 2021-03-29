<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['user_id', 'prod_id', 'tot_price'];

    
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function product() {
        return $this->belongsTo('App\Product');
    }
}
