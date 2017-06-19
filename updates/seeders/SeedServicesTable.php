<?php

namespace GetRight\Slider\Updates\Seeders;

use GetRight\Services\Models\Service;
use Illuminate\Support\Facades\App;
use Faker\Factory;
use Seeder;
use Model;

/**
 * Class SeedServicesTable
 * @package GetRight\Slider\Updates\Seeders
 * @author getRight
 */
class SeedServicesTable extends Seeder {

    /**
     * Run the seeder.
     */
    public function run() {

        Model::unguard();

        $faker = Factory::create();


        for($i = 0; $i < 3; $i++){
            Service::create([
                'title' => substr($faker->word,0,55),
                'text' => $faker->text,
                'link' => 'http://' . $faker->domainName
            ]);
        }

    }

}
