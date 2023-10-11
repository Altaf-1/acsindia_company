<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserRatingController extends Controller
{
    //
    public function index()
    {
        $ratings = \App\UserRating::latest()->paginate(20);
        return view('admin.user_ratings.index', compact('ratings'));

    }
}
