<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoriesLivewire extends Component
{

    public $categories;







    public function mount($categories){
        $this->categories=$categories;
    }


    public function render()
    {
        return view('livewire.categories-livewire');
    }
}
