<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowRight extends Component
{

    public $showAddItemForm = false;

    public function mount()
    {
        $this->showAddItemForm = false;
    }

    public function toggleAddItemForm()
    {
        $this->showAddItemForm = !$this->showAddItemForm;
    }

    public function render()
    {
        return view('livewire.show-right');
    }
}
