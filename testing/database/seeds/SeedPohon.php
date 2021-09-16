<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedPohon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_pohon')->insert(
            [
                'ordo' => '	Arecales',
                'famili' => 'Arecaceae',
                'genus' => 'Cocos',
                'species' => 'Cocos nucifera',
                'jumlah' => '100000',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
           
                                               
        );
    }
}
