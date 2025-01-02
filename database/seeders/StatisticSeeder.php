<?php

namespace Database\Seeders;

use App\Models\Statistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Statistic::create([
        'regency_id' => 5103,
        'year' => 2020,
        'area_sq_km' => 398,
        'population' => 517969,
        'regional_minimum_wage' => 2930093,
      ]);

      Statistic::create([
        'regency_id' => 5106,
        'year' => 2020,
        'area_sq_km' => 526,
        'population' => 255413,
        'regional_minimum_wage' => 2494810,
      ]);

      Statistic::create([
        'regency_id' => 5108,
        'year' => 2020,
        'area_sq_km' => 1322,
        'population' => 827642,
        'regional_minimum_wage' => 2538000,
      ]);

      Statistic::create([
        'regency_id' => 5171,
        'year' => 2020,
        'area_sq_km' => 125,
        'population' => 653136,
        'regional_minimum_wage' => 2770300,
      ]);

      Statistic::create([
        'regency_id' => 5104,
        'year' => 2020,
        'area_sq_km' => 364,
        'population' => 501870,
        'regional_minimum_wage' => 2627000,
      ]);

      Statistic::create([
        'regency_id' => 5101,
        'year' => 2020,
        'area_sq_km' => 849,
        'population' => 325879,
        'regional_minimum_wage' => 2557102,
      ]);

      Statistic::create([
        'regency_id' => 5107,
        'year' => 2020,
        'area_sq_km' => 839,
        'population' => 522729,
        'regional_minimum_wage' => 2555469,
      ]);

      Statistic::create([
        'regency_id' => 5105,
        'year' => 2020,
        'area_sq_km' => 313,
        'population' => 217469,
        'regional_minimum_wage' => 2538000,
      ]);

      Statistic::create([
        'regency_id' => 5102,
        'year' => 2020,
        'area_sq_km' => 849,
        'population' => 465086,
        'regional_minimum_wage' => 2665217,
      ]);
    }
}
