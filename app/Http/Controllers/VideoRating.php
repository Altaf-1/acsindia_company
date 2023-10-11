<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoRating extends Controller
{
    //
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['video_id', 'rating']);
        $data['user_id'] = Auth::user()->id;
        \App\VideoRating::create($data);
        return redirect()
            ->back()
            ->with('success', 'Thank you for your valuable rating');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeNew(Request $request)
    {
        $data = $request->only(['video_id', 'rating']);
        $data['user_id'] = Auth::user()->id;
        \App\VideoRatingNew::create($data);
        return redirect()
            ->back()
            ->with('success', 'Thank you for your valuable rating');
    }
}
