<?php

namespace App\Http\Livewire\Elonlar;

use App\Models\Announcement;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class IndexLivewire extends Component
{
    public $count=16;
    public $elon=false;
    public $elonlar;
    public $hasLiked=false;

    protected $listeners=[
        'category_click','qaytadanrender'
    ];
    public function qaytadanrender(){

        $this->render();
    }



    public function like($id)
    {
        $elon=Announcement::find($id);
        $user = auth()->user();
        $user->toggleFollow($elon);
        $this->hasLiked= $user->isFollowing($elon);


    }

    public function category_click($category_id,$test=false){
        if( $test=='test'){
            $this->count+=16;
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
        $this->elonlar=Announcement::take($this->count)->orderByDesc('id')->get();


        return view('livewire.elonlar.index-livewire');
    }

    public function testanno()
    {
        dd(1);
    }
}
