<?php
// app/database/seeds/UserTableSeeder.php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Elister Ellis',
        'username' => 'eellis',
        'email'    => 'eellis@foo.xxx',
        'password' => Hash::make('awesome'),
    ));
}

}
