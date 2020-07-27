<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		\DB::table('admins')->insert([
			'name' => 'Nguyễn Văn An',
			'email' => 'nguyenan@gmail.com',
			'password' => md5('123'),
		]);
	}
}
