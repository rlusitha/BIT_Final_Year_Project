<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $doctorRole = Role::where('name', 'doctor')->first();
        $receptionRole = Role::where('name', 'reception')->first();
        $assistantRole = Role::where('name', 'assistant')->first();
        $cashierRole = Role::where('name', 'cashier')->first();
        $store_keeperRole = Role::where('name', 'store keeper')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);

        $doctor = User::create([
            'name' => 'Gayan Jayakody',
            'email' => 'gayan@gmail.com',
            'password' => Hash::make('doctor123')
        ]);

        $reception = User::create([
            'name' => 'Dinithi Galappaththi',
            'email' => 'dinithi@gmail.com',
            'password' => Hash::make('reception123')
        ]);

        $assistant = User::create([
            'name' => 'Lashini Perera',
            'email' => 'lashini@gmail.com',
            'password' => Hash::make('assistant123')
        ]);

        $cashier = User::create([
            'name' => 'Danushka Fernando',
            'email' => 'danushka@gmail.com',
            'password' => Hash::make('cashier123')
        ]);

        $store_keeper = User::create([
            'name' => 'Mala Gamage',
            'email' => 'mala@gmail.com',
            'password' => Hash::make('store_keeper123')
        ]);

        $admin->roles()->attach($adminRole->id);
        $doctor->roles()->attach($doctorRole->id);
        $reception->roles()->attach($receptionRole->id);
        $assistant->roles()->attach($assistantRole->id);
        $cashier->roles()->attach($cashierRole->id);
        $store_keeper->roles()->attach($store_keeperRole->id);
    }
}
