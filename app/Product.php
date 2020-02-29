<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'uuid';

    public $incrementing = false;

    // description can be empty
    protected $attributes = [
        'description' => ''
    ];

    protected $fillable = [
        'uuid',
        'name',
        'price',
        'description',
        'merchant_id',
        'category_code'
    ];  

    public function merchant() {
        return $this->hasOne('App\Merchant', 'uuid', 'merchant_id');
    }

    public function category() {
        return $this->hasOne('App\ProductCategory', 'code', 'category_code');
    }
}
