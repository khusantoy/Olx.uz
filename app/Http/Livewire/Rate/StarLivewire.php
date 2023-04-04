<?php

namespace App\Http\Livewire\Rate;

use Livewire\Component;

class StarLivewire extends Component
{
    public $elon;

    protected $listeners=[
        'qaytadanrender2'
    ];
    public function qaytadanrender2(){

        $this->render();
    }
    public function mount($elon)
    {
        $this->elon=$elon;

    }
    public function render()
    {
        return view('livewire.rate.star-livewire');
    }
}
