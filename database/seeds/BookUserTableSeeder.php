<?php

use App\User;
use Illuminate\Database\Seeder;

class BookUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
            $users = User::find($i);
            for ($x=1; $x <= 3; $x++) { 
                $users->books()->attach(rand(1,20));
            }
        }
    }
}
