<?php

namespace Database\Seeders;

use App\Models\ItemListname;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemListNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemListname::factory(20)->create();
    }
}
