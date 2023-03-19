<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Image;
use App\Models\SupCategory;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $announcements=Announcement::paginate(20);
        return view('admin.announcements.index',compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=SupCategory::pluck('title','id');
        return view('admin.announcements.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $request->validate([
          'title'=>'required',
          'description'=>'required',
          'type_id'=>'required',
          'price'=>'required',
          'image'=>'required',
       ]);
       $massiv=[
           'title'=>$request->title,
           'description'=>$request->description,
           'type'=>$request->type_id,
           'price'=>$request->price,
           'view'=>'0',
           'user_id'=>auth()->user()->id,
           'category_id'=>$request->category_id,
       ];

       $elon=  Announcement::create($massiv);

        foreach ($request->image as $image) {
            $file = $image;
            $image_name = uniqid() . $file->getClientOriginalName();
            $i= new Image(['name'=>$image_name]);
            $elon->images()->save($i);
            $file->move(public_path('images'), $image_name);
       }


       return redirect()->route('announcements.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}