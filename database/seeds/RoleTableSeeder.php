<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'  => "ADMIN"
            ],
            [
                'name'  => "USER"
            ]
        ];
        DB::table('roles')->insert($roles);
    }
}
