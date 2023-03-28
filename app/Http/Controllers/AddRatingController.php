<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AddRatingController extends Controller
{
    public function index(Announcement $announcement)
    {
        
        $announcement->rate(1);
        
        return redirect()->back();
    }
}
