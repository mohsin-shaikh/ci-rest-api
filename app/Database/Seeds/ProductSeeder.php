<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProductSeeder extends Seeder
{
	public function run()
    {
        for ($i = 0; $i < 10; $i++) { //to add 10 product. Change limit as desired
            $this->db->table('product')->insert($this->generateProduct());
        }
    }

    private function generateProduct(): array
    {
        $faker = Factory::create();
        return [
            'name' => $faker->name(),
        ];
    }
}
