<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent; // Import eksplisit untuk Eloquent
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      Eloquent::unguard();

      // $this->call('UserTableSeeder');
      // $this->command->info('User table seeded!');

      
      $path = 'database_sql/provinces.sql';
      DB::unprepared(file_get_contents($path));
      $this->command->info('Provinces table seeded!');
      
      $path = 'database_sql/regencies.sql';
      DB::unprepared(file_get_contents($path));
      $this->command->info('Regencies table seeded!');
      
      $path = 'database_sql/districts.sql';
      DB::unprepared(file_get_contents($path));
      $this->command->info('Districts table seeded!');
      
      $path = 'database_sql/villages.sql';
      DB::unprepared(file_get_contents($path));
      $this->command->info('Villages table seeded!');

      $this->call([
        StatisticSeeder::class,
        AgriculturalSeeder::class
      ]);
    }
}
