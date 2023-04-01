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

    public function updatedRate($rate)
    {
       
        if(auth()->check()){
            $announcement=$this->elon;
            $announcement->rateOnce($rate);
        }else{
            return   redirect()->route('login');
        }

    }

    public function test($rating)
    {

        $this->rate=$rating;
    }

    public function add(){

        if($this->rate && !$this->comment==''){
            $announcement=$this->elon;
           $announcement->rate($this->rate, $this->comment );
        }
    }


    public function render()
    {
        return view('livewire.rate-livewire');
    }
}
