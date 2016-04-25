<?php

use Illuminate\Database\Seeder;

class JenjangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenjangs = [
          ['id'=>1,'nama'=>'SD'],
          ['id'=>2,'nama'=>'SMP'],
          ['id'=>3,'nama'=>'SMA'],
          ['id'=>4,'nama'=>'PT']
        ];

        DB::table('jenjang')->insert($jenjangs);
    }
}
