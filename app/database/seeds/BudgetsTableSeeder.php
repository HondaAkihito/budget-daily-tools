<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class BudgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            [
                'title' => '予算a',
                'amount' => 100000,
                'from_date' => '2024-03-01',
                'to_date' => '2024-03-31',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '予算b',
                'from_date' => '2024-03-10',
                'to_date' => '2024-04-10',
                'amount' => 200000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '予算c',
                'from_date' => '2024-03-20',
                'to_date' => '2024-04-30',
                'amount' => 300000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach($params as $param) {
            DB::table('budgets')->insert($param);
        }
    }
}
