<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\ItemListname;
use App\Models\Listname;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Item::factory(8)->create();
        // ItemListname::factory(20)->create();
        // Listname::factory(20)->create();
        $itemsCat1 = ['Brocoli', 'Papas', 'Tomates'];
        $itemsCat2 = ['Cerdo', 'Jamon de Cerdo'];
        $itemsCat3 = ['Coca-cola', 'Horchata', 'Agua',];

        foreach ($itemsCat1 as $item) {
            DB::table("items")->insert([
                "name" => $item,
                "note" => fake()->text(),
                "category_id" => 1
            ]);
        }
        foreach ($itemsCat2 as $item) {
            DB::table("items")->insert([
                "name" => $item,
                "note" => fake()->text(),
                "category_id" => 2
            ]);
        }
        foreach ($itemsCat3 as $item) {
            DB::table("items")->insert([
                "name" => $item,
                "note" => fake()->text(),
                "category_id" => 3
            ]);
        }
    }
}
