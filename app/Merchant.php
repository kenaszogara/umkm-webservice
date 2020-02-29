<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'bank_code',
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
        return $this->hasOne('App\Bank', 'code', 'bank_code');
    }
}
