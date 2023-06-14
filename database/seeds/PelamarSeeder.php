<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PelamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 100; $i++) 
        {
            DB::table('pelamar')->insert([
                'nik' => $faker->randomNumber(8, true),
                'nama' => $faker->name(),
                'gender' => $faker->lexify(),
                'tingkat_pendidikan' => $faker->sentence(1),
                'bidang_keahlian' => $faker->sentence(2),
            ]);
        }
    }
}
