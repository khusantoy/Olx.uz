<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Elonfilter extends Component
{
    public $filter='';



    public function updated(){
       $this->emit('category_click',1,$this->filter);
    }

    public function render()
    {
        return view('livewire.elonfilter');
    }
}
