<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RateLivewire extends Component
{
    public $elon,$rate;

    public function mount($elon)
    {
        $this->elon=$elon;

    }

    public function updatedRate($rate)
    {
        $announcement=$this->elon;
        $announcement->rateOnce($rate);

    }


    public function render()
    {
        return view('livewire.rate-livewire');
    }
}
