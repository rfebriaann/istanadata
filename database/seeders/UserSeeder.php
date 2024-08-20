<?php

namespace Database\Seeders;

use App\Models\Opd;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
            'status' => 'aktif',
            'opd_id' => null,
        ])->assignRole('Super Admin');
        
        //     User::create([
        //         'nama' => 'Dinas Sosial',
        //         'email' => 'dinassosial@gmail.com',
        //         'password' => bcrypt('123456'),
        //         'status' => 'aktif',
        //         'opd_id' => 7,
        //     ])->assignRole('Opd');

            User::create([
                'nama' => 'Diskominfo',
                'email' => 'diskominfo@gmail.com',
                'password' => bcrypt('123456'),
                'status' => 'aktif',
                'opd_id' => 16,
            ])->assignRole('Opd');

            // User::create([
            //     'nama' => 'Wali Data',
            //     'email' => 'walidata@gmail.com',
            //     'password' => bcrypt('123456'),
            //     'status' => 'aktif',
            //     'opd_id' => null,
            // ])->assignRole('Wali Data');
        
    }
}
