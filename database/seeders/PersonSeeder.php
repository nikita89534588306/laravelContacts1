<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

        define("VAL_PERSON_FOR_GENERATE", 10);
        for ($numberPerson=1; $numberPerson<=VAL_PERSON_FOR_GENERATE; $numberPerson++ ){
            
            $valueNumberPhones = rand(1,2);

            Person::factory(1)
                ->has(Phone::factory()->count($valueNumberPhones))
                ->create();
        }
    }
}
