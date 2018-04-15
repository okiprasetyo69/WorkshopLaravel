<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Setting foreign key 0 if use my sql
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        //Reset table users
        DB::table('users')->truncate();

        //Insert 3 Dummy Data users
        DB::table('users')->insert([
        	[
        		'name' => 'Oki Prasetyo',
        		 'email' => 'oki.prasetyo45@gmail.com',
        		 'password' => bcrypt('123456'),
        	],
        	[
        		'name' => 'Iis Sri Wahyuni',
        		 'email' => 'WahyuniSri95@gmail.com',
        		 'password' => bcrypt('123456'),
        	],
        	[
        		'name' => 'Indonesia Android Kejar / Laravel',
        		 'email' => 'Iak_Laravel@gmail.com',
        		 'password' => bcrypt('123456'),
        	]
        ]);
        //turn on 
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
