<?php

namespace Database\Seeders;

use App\Models\Domicilio;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create()->each(function ($user){
            $domicilio = Domicilio::factory()->make();
            $user->domicilio()->save($domicilio);
        });
    }
}
