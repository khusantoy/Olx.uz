<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SupCategory;
use Illuminate\Http\Request;

class SupCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supcategories=SupCategory::with('category')->get();
        return view('admin.supcategories.index',compact('supcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::pluck('title','id');
        return view('admin.supcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('uploads/supcategories'), $image_name);
        $request->validate([
            'title'=>'required|min:2|max:255',
        ]);
        SupCategory::create($data);
        return redirect()->route('supcategories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supcategories=SupCategory::find($id);
        return view('admin.supcategories.show',compact('supcategories'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories=Category::pluck('title','id');
        $supcategories=SupCategory::find($id);

        return view('admin.supcategories.edit',compact('supcategories','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supcategory=SupCategory::find($id);
        $data = $request->all();
        $file = $request->file('image');
        $image_name = uniqid().$file->getClientOriginalName();
        $data['image'] = $image_name;
        if ($supcategory->image) {
            $file->move(public_path('uploads/supcategories'), $image_name);
        }else{
            $file->move(public_path('uploads/supcategories'), $image_name);
        }
        $supcategory->update($data);
        return redirect()->route('supcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supcategory=SupCategory::find($id);
        $supcategory->delete();
        return back();
    }
}
