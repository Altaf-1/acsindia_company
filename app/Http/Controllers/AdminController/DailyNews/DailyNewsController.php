<?php

namespace App\Http\Controllers\AdminController\DailyNews;

use App\DailyNews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DailyNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $datas = DailyNews::all();
        return view('admin.daily_news.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.daily_news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['title', 'date', 'pdf']);
        if ($request->hasFile('pdf')) {
            //inserting image
            $image = $request->pdf->store('DailyNews', 'public');
            $data['pdf'] = $image;
        }
        DailyNews::create($data);

        return redirect()->route('admin.dailynews.index')
            ->with('success', 'Notification added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = DailyNews::findOrFail($id);
        return view('admin.daily_news.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['title', 'date', 'pdf']);

        $test = DailyNews::findOrFail($id);
        if ($request->hasFile('pdf')) {
            //delete old photo
            Storage::disk('public')->delete($test->pdf);
            //inserting image
            $image = $request->pdf->store('DailyNews', 'public');
            $data['pdf'] = $image;
        }
        $test->update($data);

        return redirect()->route('admin.dailynews.index')
            ->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $data = DailyNews::findOrFail($id);
        if ($data->pdf != null) {
          Storage::delete('/public/' .$data->pdf);
        }
        $data->delete();
        return redirect()->back()
            ->with('success', 'Deleted');
    }
}
