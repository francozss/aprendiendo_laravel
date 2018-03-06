<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::insert('INSERT INTO profession(title) VALUES(:title)',[
        //   'title'=>'Desarrollador back-end',
        // ]);
          DB::table('profession')->insert([
            'title' => 'Desarrollador back-end',
          ]);
          DB::table('profession')->insert([
            'title' => 'Desarrollador front-end',
          ]);
          DB::table('profession')->insert([
            'title' => 'Diseñador web',
          ]);
    }
}
