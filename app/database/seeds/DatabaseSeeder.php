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

		$this->call('LeagueTableSeeder');

        $this->command->info('League table seeded!');
    }

}

class LeagueTableSeeder extends Seeder {

    public function run()
    {
        DB::table('league')->delete();

        league::table(array('league_id' => 1, 'name' => 'Prosports 1. Liga', 'season_id' => 1));
    }

}