<?php

namespace Database\Seeders;

use App\Models\AdminModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        AdminModel::created([
            'name'=>"RosaLima",
            'phone'=>"0329476179",
            'email'=>"rosalima@gmail.com",
            'password'=>bcrypt('thuylemon')
        ]);
    }
}
