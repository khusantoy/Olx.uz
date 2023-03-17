<?php

namespace App\Http\Livewire\Elonlar;

use App\Models\Announcement;
use Livewire\Component;

class IndexLivewire extends Component
{
    public $count=8;
     protected $listeners=[
        'loadmore'
    ];
    public function loadmore(){
       $this->count+=8;
    }
   
    public function render()
    {
        $elonlar=Announcement::take($this->count)->get();

        return view('livewire.elonlar.index-livewire',compact('elonlar'));
    }
}
