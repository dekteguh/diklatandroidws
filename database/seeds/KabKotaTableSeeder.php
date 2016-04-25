<?php

use Illuminate\Database\Seeder;

class KabKotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kabkota = [
        ['id'=>1,'nama'=>'Jakarta Timur','prop_id'=>1,'latitude'=>-6.213791,'longitude'=>106.944126],
        ['id'=>2,'nama'=>'Jakarta Barat','prop_id'=>1,'latitude'=>-6.176107,'longitude'=>106.737813],
        ['id'=>3,'nama'=>'Jakarta Pusat','prop_id'=>1,'latitude'=>-6.172548,'longitude'=>106.818995],
        ['id'=>4,'nama'=>'Jakarta Selatan','prop_id'=>1,'latitude'=>-6.247733,'longitude'=>106.807319],
        ['id'=>5,'nama'=>'Cianjur','prop_id'=>2,'latitude'=>-6.820992,'longitude'=>107.140234],
        ['id'=>6,'nama'=>'Bandung','prop_id'=>2,'latitude'=>-6.910559,'longitude'=>107.610262],
        ['id'=>7,'nama'=>'Sukabumi','prop_id'=>2,'latitude'=>-6.917859,'longitude'=>106.931718],
        ['id'=>8,'nama'=>'Ciamis','prop_id'=>2,'latitude'=>-7.316076,'longitude'=>108.353863],
        ['id'=>9,'nama'=>'Semarang','prop_id'=>3,'latitude'=>-6.977781,'longitude'=>110.409943],
        ['id'=>10,'nama'=>'Salatiga','prop_id'=>3,'latitude'=>-7.327605,'longitude'=>110.500647],
        ['id'=>11,'nama'=>'Pemalang','prop_id'=>3,'latitude'=>-6.920089,'longitude'=>109.370432],
        ['id'=>12,'nama'=>'Kebumen','prop_id'=>3,'latitude'=>-7.675392,'longitude'=>109.667096],
        ['id'=>13,'nama'=>'Sleman','prop_id'=>4,'latitude'=>-7.714974,'longitude'=>110.335446],
        ['id'=>14,'nama'=>'Kulon Progo','prop_id'=>4,'latitude'=>-7.788661,'longitude'=>110.162665],
        ['id'=>15,'nama'=>'Gunung Kidul','prop_id'=>4,'latitude'=>-7.994451,'longitude'=>110.606601],
        ['id'=>16,'nama'=>'Bantul','prop_id'=>4,'latitude'=>-7.874783,'longitude'=>110.324494],
        ['id'=>17,'nama'=>'Surabaya','prop_id'=>5,'latitude'=>-7.249731,'longitude'=>112.750820],
        ['id'=>18,'nama'=>'Gresik','prop_id'=>5,'latitude'=>-7.165601,'longitude'=>112.652422],
        ['id'=>19,'nama'=>'Sumenep','prop_id'=>5,'latitude'=>-7.008535,'longitude'=>113.858428],
        ['id'=>20,'nama'=>'Banyuwangi','prop_id'=>5,'latitude'=>-8.214243,'longitude'=>114.371521]
      ];

      DB::table('kabkota')->insert($kabkota);
    }
}
