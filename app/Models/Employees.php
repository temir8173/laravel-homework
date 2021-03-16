<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
	public function company()
	{
	    return $this->belongsTo(Companies::class, 'company_id');
	}
	public function position()
	{
	    return $this->belongsTo(Positions::class, 'position_id');
	}
    use HasFactory;
}
