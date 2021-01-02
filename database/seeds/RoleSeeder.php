<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'reception']);
        Role::create(['name' => 'assistant']);
        Role::create(['name' => 'cashier']);
        Role::create(['name' => 'store keeper']);
    }
}
