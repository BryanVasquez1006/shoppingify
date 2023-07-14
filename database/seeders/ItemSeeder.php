<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\ItemListname;
use App\Models\Listname;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::factory(20)->create();
        // ItemListname::factory(20)->create();
        // Listname::factory(20)->create();
    }
}
