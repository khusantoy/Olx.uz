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
    public $filter=false;
    public $subcategory=false;
    public $hasLiked=false;

    protected $listeners=[
        'category_click','qaytadanrender','supcategory_click'
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

    public function supcategory_click($subcategory)
    {
        $this->subcategory=$subcategory;
     }
    public function category_click($category_id,$test=false){
        $this->filter=$test;

//        if( $test=='test'){
//            $this->count+=16;
//            $this->elonlar=Announcement::where('category_id',$category_id)
//            ->take($this->count)
//            ->orderByDesc('id')
//            ->get();
//        }else{
//
//        }

        $this->dispatchBrowserEvent('category_bosildi');
    }



    public function showElon($id){
        $elon = Announcement::find($id);
        $this->elon = $elon;
    }
    public function render()
    {
        if($this->filter){
            $this->elonlar=Announcement::where('title','like',"%".$this->filter."%")
                ->take($this->count)
                ->orderByDesc('id')
                ->get();
        }else{
            if ($this->subcategory){
                $this->elonlar=Announcement::where('category_id',$this->subcategory)->orderByDesc('id')->get();

            }else{

        $this->elonlar=Announcement::take($this->count)->orderByDesc('id')->get();
            }
        }


        return view('livewire.elonlar.index-livewire');
    }

    public function testanno()
    {
        dd(1);
    }
}
