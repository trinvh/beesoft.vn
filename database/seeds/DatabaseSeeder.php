<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        if(User::count() <= 0) {
            User::create([
                'name'  => 'Administrator',
                'email' => 'info@beesoft.vn',
                'password'  => bcrypt('longtien@1')
            ]);
        }
        if(Role::count() <= 0) {
            Role::create([
                'name' => 'Admin',
                'slug' => 'admin',
                'level' => 1,
            ]);
            Role::create([
                'name' => 'Moderator',
                'slug' => 'mod',
                'level' => 2,
            ]);
        }
        User::first()->attachRole(1);
        Model::reguard();
    }
}
