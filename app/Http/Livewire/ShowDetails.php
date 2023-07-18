<?php

namespace App\Http\Livewire;
use Livewire\ItemFilter;
use Livewire\Component;

class ShowDetails extends Component
{

    public $itemId = null;
    public function showDetails($itemId)
{
    $this->itemId = $itemId;
}

    public function render()
    {
        return view('livewire.show-details');
    }
}
