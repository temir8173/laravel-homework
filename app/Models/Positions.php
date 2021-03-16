<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{

	public function employees() 
	{
		return $this->hasMany(Employees::class, 'position_id');
	}


    use HasFactory;
}
