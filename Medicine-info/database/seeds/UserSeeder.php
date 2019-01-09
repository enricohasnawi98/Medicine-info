<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::create(['name' => 'Iyang A Wibowo', 'email' => 'iyanganekawibowo@gmail.com', 'password' => bcrypt('123456'), ]);
        User::create(['name' => 'jiwomdf', 'email' => 'jiwomdf@gmail.com', 'password' => bcrypt('123456'), ]);
    }
}
