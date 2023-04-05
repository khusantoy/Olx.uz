<?php

namespace App\Http\Livewire\Rate;

use Livewire\Component;

class RateStarLivewire extends Component
{
    public $elon;

    public function mount($elon)
    {
        $this->elon = $elon;
    }

    public function render()
    {
        return view('livewire.rate.rate-star-livewire');
    }
}
