<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id' => $this->id,
            'name' => $this->name,
            'phone_number' => $this->phone_number, 
            'email' => $this->email,
            'address' => $this->address,
			'gender' => $this->gender,
			'birth_date' => $this->birth_date,
			'profile' => $this->profile,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at
        ];
    }
}
