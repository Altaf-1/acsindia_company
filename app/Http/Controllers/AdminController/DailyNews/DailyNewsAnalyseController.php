<?php

namespace App\Http\Controllers\AdminController\DailyNews;

use App\DailyNewsAnalyse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DailyNewsAnalyseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $datas = DailyNewsAnalyse::latest()->get();
        return view('admin.daily_news_analyse.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.daily_news_analyse.create');
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
        DailyNewsAnalyse::create($data);

        return redirect()->route('admin.dailynewsanalyse.index')
            ->with('success', 'Data added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = DailyNewsAnalyse::findOrFail($id);
        return view('admin.daily_news_analyse.edit', compact('data'));
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

        $test = DailyNewsAnalyse::findOrFail($id);
        if ($request->hasFile('pdf')) {
            //delete old photo
            Storage::disk('public')->delete($test->pdf);
            //inserting image
            $image = $request->pdf->store('DailyNews', 'public');
            $data['pdf'] = $image;
        }
        $test->update($data);

        return redirect()->route('admin.dailynewsanalyse.index')
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
        $data = DailyNewsAnalyse::findOrFail($id);
        if ($data->pdf != null) {
           
             Storage::delete('/public/' .$data->pdf);
        }
        $data->delete();
        return redirect()->back()
            ->with('success', 'Deleted');
    }
}
