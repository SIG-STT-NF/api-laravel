<?php

namespace Database\Seeders;

use App\Models\Agricultural;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgriculturalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Agricultural::create([
        'regency_id' => 5103,
        'year' => 2020,
        'pest_incidence' => 218,
        'land_area_ha' => 13461,
        'planted_area_ha' => 29003,
        'production' => 161371,
      ]);

      Agricultural::create([
        'regency_id' => 5106,
        'year' => 2020,
        'pest_incidence' => 96,
        'land_area_ha' => 2854,
        'planted_area_ha' => 4928,
        'production' => 23369,
      ]);

      Agricultural::create([
        'regency_id' => 5108,
        'year' => 2020,
        'pest_incidence' => 621,
        'land_area_ha' => 3777,
        'planted_area_ha' => 5019,
        'production' => 32907,
      ]);

      Agricultural::create([
        'regency_id' => 5171,
        'year' => 2020,
        'pest_incidence' => 587,
        'land_area_ha' => 7141,
        'planted_area_ha' => 10663,
        'production' => 62159,
      ]);

      Agricultural::create([
        'regency_id' => 5104,
        'year' => 2020,
        'pest_incidence' => 1404,
        'land_area_ha' => 20197,
        'planted_area_ha' => 37075,
        'production' => 186916,
      ]);

      Agricultural::create([
        'regency_id' => 5101,
        'year' => 2020,
        'pest_incidence' => 397,
        'land_area_ha' => 6725,
        'planted_area_ha' => 13318,
        'production' => 52813,
      ]);

      Agricultural::create([
        'regency_id' => 5107,
        'year' => 2020,
        'pest_incidence' => 216,
        'land_area_ha' => 9042,
        'planted_area_ha' => 19359,
        'production' => 99525,
      ]);

      Agricultural::create([
        'regency_id' => 5105,
        'year' => 2020,
        'pest_incidence' => 1689,
        'land_area_ha' => 1958,
        'planted_area_ha' => 3417,
        'production' => 26828,
      ]);

      Agricultural::create([
        'regency_id' => 5102,
        'year' => 2020,
        'pest_incidence' => 87,
        'land_area_ha' => 9566,
        'planted_area_ha' => 18608,
        'production' => 111594,
      ]);

    }
}
