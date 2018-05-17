<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime();
        DB::table('categories')->insert([
            [
                'description' => 'Music',
                'remarks' => config('constants.remarks_new_category_created') . 'Administrator',
                'created_at' => $date,
            ],
            [
                'description' => 'Movies',
                'remarks' => config('constants.remarks_new_category_created') . 'Administrator',
                'created_at' => $date,
            ],
            [
                'description' => 'Games',
                'remarks' => config('constants.remarks_new_category_created') . 'Administrator',
                'created_at' => $date,
            ],
            [
                'description' => 'Applications',
                'remarks' => config('constants.remarks_new_category_created') . 'Administrator',
                'created_at' => $date,
            ],
            [
                'description' => 'Information',
                'remarks' => config('constants.remarks_new_category_created') . 'Administrator',
                'created_at' => $date,
            ]
        ]);
    }
}
