<?php

namespace App\Http\Controllers\AdminController\PrelimsFaq;

use App\Http\Controllers\Controller;
use App\PrelimsFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrelimsFaqController extends Controller
{

    public function index()
    {
        $prelims_faqs = PrelimsFaq::latest()->paginate(10);
        return view('admin.prelimsFAQ.index', compact('prelims_faqs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['image']);

        if ($request->hasFile('image')) {
            $image = $request->image->store('prelimsFaq', 'public');
            $data['image'] = $image;
        }
        PrelimsFaq::create($data);

        return redirect()
            ->route('admin.prelims.faq.index')
            ->with('success', 'Created Succesfully');
    }


    public function destroy($id)
    {
        $prelim_faq = PrelimsFaq::find($id);
        Storage::delete($prelim_faq->image);
        $prelim_faq->delete();
        return redirect()->back()->with('success', 'Deleted Succesfully');
    }
}
