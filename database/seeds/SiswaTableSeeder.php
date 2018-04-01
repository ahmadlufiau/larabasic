<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('siswa')->insert([
			'name' => str_random(10),
			'email' => str_random(10) . '@gmail.com',
			'address' => str_random(10),
		]);
	}
}
