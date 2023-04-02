<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RateLivewire extends Component
{
    public $elon,$rate=false,$comment='';

    public function mount($elon)
    {
        $this->elon=$elon;

    }


    public function test($rating)
    {

        $this->rate=$rating;
    }

    public function add(){
        if(auth()->check()){
            if($this->rate && !$this->comment==''){
                $announcement=$this->elon;
                $announcement->rateOnce($this->rate, $this->comment );
            }
        }else{
            return   redirect()->route('login');
        }
        $this->emit('qaytadanrender2');
        $this->dispatchBrowserEvent('qaytadanrender2');

    }


    public function render()
    {
        return view('livewire.rate-livewire');
    }

}
