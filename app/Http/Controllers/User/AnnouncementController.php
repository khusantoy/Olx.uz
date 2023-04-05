<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        Paginator::useBootstrap();
        $announcements = Announcement::orderByDesc('id')->paginate(10);

        $categories = Category::with(['supCategories' => function ($query) {
            return $query->whereNot('title', "like", "%10%");
        }])->get();
        return view('front.MyAnno', compact('categories', 'announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        // $count = 2;
        // $count++;
        // dd($count);
        cache(['ad' => 'showed']);

        if (cache('ad') !== 'showed') {
            $announcement->view = $announcement->view + 1;
            $announcement->update([
                'view' =>  $announcement->view,
            ]);
        }
        $categories = Category::all();
        $announcements = Announcement::with('category')->get();
        return view('front.ad-show', compact('announcement', 'categories', 'announcements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $announcements = Announcement::find($id);
        return view('front.edit-anno', compact( 'announcements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
