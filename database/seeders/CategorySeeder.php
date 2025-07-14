<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Pneumatic cylinders',
                'description' => 'Pneumatic cylinders are used for various automation systems.',
            ],
            [
                'name' => 'Air Soruce Treatment Units',
                'description' => 'Units for treating compressed air before it is used in systems.',
            ],
            [
                'name' => 'Directional valves',
                'description' => 'Valves that control the direction of air flow.',
            ],
            [
                'name' => 'Fluid Solenoid Valve',
                'description' => 'Solenoid valves for controlling fluid flow using electric signals.',
            ],
            [
                'name' => 'Pneumatic Accessories',
                'description' => 'Additional pneumatic system components and tools.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

