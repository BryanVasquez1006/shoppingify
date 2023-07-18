<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use App\Models\Listname;
use Livewire\Component;
use Livewire\ShowDetails;

class ItemFilter extends Component
{
    public $showDetails = false;
    public $itemId;
   
    public function showDetails()
    {
        
        $this->showDetails = true;
        $this->emit('showDetails', $this->itemId);
    }

    public $search;
    public function render()
    {
        $categories = Category::all();
        $listnames = Listname::all();
        $items = Item::where("name", "LIKE", "%" . $this->search . "%")->get();

        return view('livewire.item-filter', compact("items", "categories", "listnames"));
    }
}

