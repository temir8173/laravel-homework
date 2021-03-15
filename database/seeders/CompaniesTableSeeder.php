<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$items = [            
	        ['id' => 1, 'title' => 'Administrator'],
	        ['id' => 2, 'title' => 'Simple user'],
	    ];
	    
		\DB::table('companies')->insert([
			'name' => Str::random(8),
			'logo' => Str::random(20).'.jpg',
			'description' => Str::random(10),
			'founded_year' => rand(1900, 2020),
			'email' => Str::random(10).'@gmail.com',
			'password' => bcrypt('secret'),
		]);
    }
}
