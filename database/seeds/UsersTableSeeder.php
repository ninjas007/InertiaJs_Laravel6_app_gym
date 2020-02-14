<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i < 10; $i++) {
    		User::create([
    			'name' => 'aco'.$i.'',
    			'email' => 'aco'.$i.'@gmail.com',
    			'password' => Hash::make('password'),
    		]);	
    	}
    }
}
