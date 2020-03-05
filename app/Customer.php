<?php

namespace App;

use Illuminate\Foundation\Auth\Customer as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Ramsey\Uuid\Uuid;

class Customer extends Authenticatable implements JWTSubject
{

	protected $primaryKey = 'uuid';
	protected $guarded = ['uuid'];

    public $incrementing = false;
	
	// default value for table
	protected $attributes = [
		'profile' => '',
	];
	
	// which column can be filled from form
	protected $fillable = [
		'name', 
		'phone_number',
		'password',
		'email',
		'address',
		'gender',
		'birth_date'
	];

	protected $hidden = [
		'password'
	];

	public function getAuthPassword()
    {
     return $this->password;
    }
	
	public static function boot()
	{
		parent::boot();
		self::creating(function ($model) {
			$model->uuid = (string) Uuid::uuid4();
		});
	}

	public function getJWTIdentifier()
    {
      return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
      return [];
    }
}
