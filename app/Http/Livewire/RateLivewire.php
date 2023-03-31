<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RateLivewire extends Component
{
    public $elon,$rate;

    public function mount($elon)
    {
        $this->elon=$elon;
        if(!auth()->check()){
            return   redirect()->route('login');
        }
    }

    public function updatedRate($rate)
    {
        if(auth()->check()){
            $announcement=$this->elon;
            $announcement->rateOnce($rate);
        }else{
            return   redirect()->route('login');
        }

    }


    public function render()
    {
        return view('livewire.rate-livewire');
    }
}
