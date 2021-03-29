<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['user_id', 'prod_name', 'price'];
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function orders() {
        return $this->belongsTo('App\Orders');
    }
}
