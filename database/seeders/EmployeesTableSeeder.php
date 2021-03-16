<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Companies;
use App\Models\Positions;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
        	[ 'name' => 'Mr White', 'about' => 'some info', 'salary' => '70000' ],
        	[ 'name' => 'Willy walka', 'about' => 'some info', 'salary' => '40000' ],
        	[ 'name' => 'Jessy Pinkman', 'about' => 'some info', 'salary' => '45000' ],
        	[ 'name' => 'Mrs White', 'about' => 'some info', 'salary' => '40000' ],
        	[ 'name' => 'Harry Potter', 'about' => 'some info', 'salary' => '40000' ],
        ];
        $companies = Companies::select(['id'])->get()->toArray();
        $positions = Positions::select(['id'])->get()->toArray();
        foreach ($items as $item) {
	    	DB::table('employees')->insert([
				'name' => $item['name'],
				'about' => $item['about'],
				'salary' => $item['salary'],
				'company_id' => $companies[array_rand($companies)]['id'],
				'position_id' => $positions[array_rand($positions)]['id'],
			]);
	    }
    }
}
