<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call("UserTableSeeder");
		$this->call("RegionTableSeeder");
		$this->call("AddressTableSeeder");
		$this->call("ClientTableSeeder");
		$this->call("ScopeTableSeeder");
		$this->call("ProductTableSeeder");
	}

}
