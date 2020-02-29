<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{  
    protected $table = 'product_categories';

    protected $primaryKey = 'uuid';

    public $incrementing = false;
}
