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
        $this->call('AccTypeSeeder');
		$this->call('UserTableSeeder');
        $this->call('AgencyTableSeeder');
        $this->call('ReportTypeStatusSeeder');
        $this->call('GenAccSeeder');
		$this->call('ReportTableSeeder');
	}

}
