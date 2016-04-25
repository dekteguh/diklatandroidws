<?php

use Illuminate\Database\Seeder;

class PropinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $propinsi = [
        ['id'=>1,'nama'=>'DKI Jakarta','latitude'=>-6.180736,'longitude'=>106.828474],
        ['id'=>2,'nama'=>'Jawa Barat','latitude'=>-6.901846,'longitude'=>107.618054],
        ['id'=>3,'nama'=>'Jawa Tengah','latitude'=>-6.993472,'longitude'=>110.419993],
        ['id'=>4,'nama'=>'DI Yogyakarta','latitude'=>-7.794751,'longitude'=>110.367318],
        ['id'=>5,'nama'=>'Jawa Timur','latitude'=>-7.245552,'longitude'=>112.73914]
      ];

      DB::table('propinsi')->insert($propinsi);
    }
}
