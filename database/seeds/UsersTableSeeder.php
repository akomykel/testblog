<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();
        DB::table('users')->insert([
            'firstname' => 'Kordopyo',
            'middlename' => 'Balanghoy',
            'lastname' => 'kordopya',
            'usertype' => 1,
            'email' => 'kordopyo@gmail.com',
            'password' => bcrypt('kordopyo'),
            'remarks' => config('constants.remarks_new_user_created') . 'Administrator',
            'created_at' => $date,
        ]);
    }
}
