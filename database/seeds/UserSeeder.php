<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $profession = DB::select('SELECT id FROM profession WHERE title = ?, ['Desarrollador back-end']);
        // $profession = DB::table('profession')->select('id')->first();
        $profession = Profession::
          select('id')
          ->where('title','=','Desarrollador back-end')
          ->first();
        //dd($profession);
        User::create([
          'name' => 'Franco Sinche',
          'email' =>'franco@gmail.com',
          'password' => bcrypt('laravel'),
          'profession_id' => $profession->id,
        ]);
    }
}
