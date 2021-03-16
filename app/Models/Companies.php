<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{

	public function employees() 
	{
		return $this->hasMany(Employees::class, 'company_id');
	}
	
}
