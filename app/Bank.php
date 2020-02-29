<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'merchant_bank';

    protected $primaryKey = 'uuid';

    public $incrementing = false;

}
