<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['name'=>"Hung", 'date'=>'03-03-2001', 'description'=>'dep trai'],
            ['name'=>"Cuong", 'date'=>'03-03-1991', 'description'=>'xau trai'],
            ['name'=>"Thuong", 'date'=>'03-03-2001', 'description'=>'xinh gai']
        ]);
    }
}
