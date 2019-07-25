<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

       User::create([
           'cpf'        => '11111111111',
           'name'       => 'Administrador do sistema',
           'login'      => 'admin',
           'email'      => 'admin@admin123.com',
           'password'   =>  env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
           'register'   => '2019-07-07',
           'change'     => '2019-07-07',
           'active'     => true
       ]);
    }
}
