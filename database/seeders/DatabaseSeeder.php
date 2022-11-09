<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(100)->create();

        $array = range(1, 100);
        shuffle($array);
        foreach (User::all() as $user){
            $user->update(['receiver_id' => $array[$user->id - 1]]);
        }
    }
}
