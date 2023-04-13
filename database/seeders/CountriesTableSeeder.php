<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = json_decode(file_get_contents(database_path('countries.json')), true);

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country['name'],
                'dialCode' => $country['dialCode'],
            ]);
        }
    }
}
