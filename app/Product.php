<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

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
        'merchant_uuid',
        'category_id'
    ];  

    public function merchant() {
        return $this->hasOne('App\Merchant', 'uuid', 'merchant_uuid');
    }

    public function category() {
        return $this->hasOne('App\ProductCategory', 'id', 'category_id');
    }

    public static function boot()
	{
		parent::boot();
		self::creating(function ($model) {
			$model->uuid = (string) Uuid::uuid4();
		});
	}
}
