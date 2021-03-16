<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [            
	        [ 'name' => 'Директор' ],
	        [ 'name' => 'Бухгалтер' ],
	        [ 'name' => 'Разработчик' ],
	        [ 'name' => 'HR-менеджер' ],
	    ];
	    
	    foreach ($items as $item) {
	    	DB::table('positions')->insert([
				'name' => $item['name']
			]);
	    }
    }
}
