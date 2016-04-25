<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JenjangTableSeeder::class);
        $this->call(PropinsiTableSeeder::class);
        $this->call(KabKotaTableSeeder::class);
        $this->call(PendidikanTableSeeder::class);
    }
}
