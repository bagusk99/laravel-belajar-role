<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // generate role
        Role::create(['name' => 'super_admin']);
        Role::create(['name' => 'dosen']);
        Role::create(['name' => 'mahasiswa']);
        Role::create(['name' => 'staff']);

        // generate user
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123qweasd'),
        ]);
        $admin->assignRole('super_admin');

        $dosen = User::create([
            'name' => 'dosen',
            'email' => 'dosen@gmail.com',
            'password' => Hash::make('123qweasd'),
        ]);
        $dosen->assignRole('dosen');

        $mahasiswa = User::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'password' => Hash::make('123qweasd'),
        ]);
        $mahasiswa->assignRole('mahasiswa');

        $staff = User::create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('123qweasd'),
        ]);
        $staff->assignRole('staff');
    }
}
