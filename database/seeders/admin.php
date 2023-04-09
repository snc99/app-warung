<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'email' => 'yeni@wr.com',
                'password' => bcrypt('wr123@'),
                'level' => 'admin'
            ],
            [
                'email' => 'ela@wr.com',
                'password' => bcrypt('wr123@'),
                'level' => 'admin'
            ],
            [
                'email' => 'eni@wr.com',
                'password' => bcrypt('wr123@'),
                'level' => 'admin'
            ],
            [
                'email' => 'admin@wr.com',
                'password' => bcrypt('wr123@'),
                'level' => 'admin'
            ]
        ];

        foreach ($user as $key => $value) {
            user::create($value);
        }
    }
}
