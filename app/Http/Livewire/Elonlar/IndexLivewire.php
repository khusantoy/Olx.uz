<?php

namespace App\Http\Livewire\Elonlar;

use App\Models\Announcement;
use Livewire\Component;

class IndexLivewire extends Component
{
    public $count=8;
    public $elon=false;
     protected $listeners=[
        'loadmore'
    ];

    public function loadmore(){
       $this->count+=8;
    }

    public function showElon($id){
        $elon = Announcement::find($id);
        $this->elon = $elon;
    }
    public function render()
    {
        $elonlar=Announcement::take($this->count)->orderByDesc('id')->get();
        $elon=$this->elon;
        return view('livewire.elonlar.index-livewire',compact('elonlar','elon'));
    }
}
