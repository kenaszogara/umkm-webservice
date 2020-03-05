<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Merchant extends Model
{
    protected $primaryKey = 'uuid';

    public $incrementing = false;

    // description can be empty
    protected $attributes = [
        'description' => '',
        'profile' => ''
    ];

    protected $fillable = [
        'uuid',
        'name',
        'phone', 
        'email',
        'address',
        'bank_id',
        'description',
        'profile'
    ];

    public function products() {
        return $this->hasMany('App\Product');
    }

    // ...->hasOne(
    //      model, 
    //      column_name_in_bank_table_containing_the_reference_to_merchant, 
    //      column_name_of_merchant_containing_identifier
    //      )
    public function bank() {
        return $this->hasOne('App\Bank', 'id', 'bank_id');
    }

    public static function boot()
	{
		parent::boot();
		self::creating(function ($model) {
			$model->uuid = (string) Uuid::uuid4();
		});
	}
}
