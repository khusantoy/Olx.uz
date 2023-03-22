<?php

namespace App\Http\Livewire\Elonlar;

use App\Models\Announcement;
use Livewire\Component;

class IndexLivewire extends Component
{
    public $count=8;
    public $elon=false;
    public $elonlar;
     protected $listeners=[
        'category_click'
    ];

    public function mount(){
        $this->elonlar=Announcement::take($this->count)->orderByDesc('id')->get();
    }
  
    public function category_click($category_id,$test=false){
        if( $test=='test'){
            $this->count+=8;
            $this->elonlar=Announcement::where('category_id',$category_id)
            ->take($this->count)
            ->orderByDesc('id')
            ->get();
        }else{
            $this->elonlar=Announcement::where('category_id',$category_id)
           ->where('title','like',"%".$test."%")
            ->take($this->count)
            ->orderByDesc('id')
            ->get();
        }

        
            
       
        $this->dispatchBrowserEvent('category_bosildi');
    }

   

    public function showElon($id){
        $elon = Announcement::find($id);
        $this->elon = $elon;
    }
    public function render()
    {
        $elonlar=$this->elonlar;
        $elon=$this->elon;
        return view('livewire.elonlar.index-livewire',compact('elonlar','elon'));
    }
}
