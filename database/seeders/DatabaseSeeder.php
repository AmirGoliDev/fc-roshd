<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		Classroom::factory(10)->create();
		User::factory()->create([
			'name' => 'roshd',
			'family' => 'navid102',
		]);
		User::factory()->create([
			'name' => 'حمیدرضا',
			'family' => 'افروزی',
		]);
		User::factory(10)->create();
	}
}
