<?php

use Illuminate\Database\Seeder;

class UsertypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();
        DB::table('usertypes')->insert([
            [
                'description' => 'Administrator',
                'remarks' => config('constants.remarks_new_usertype_created') . 'Administrator',
                'created_at' => $date,
            ],
            [
                'description' => 'Blogger',
                'remarks' => config('constants.remarks_new_usertype_created') . 'Administrator',
                'created_at' => $date,
            ]
        ]);
    }
}
