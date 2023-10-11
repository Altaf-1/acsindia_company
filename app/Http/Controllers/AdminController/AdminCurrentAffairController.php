<?php

namespace App\Http\Controllers\AdminController;

use App\CurrentAffair;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCurrentAffairController extends Controller
{
    //
    public function index()
    {
        //
        $datas = \App\CurrentAffair::latest()->get();;
        return view('admin.current_affairs.index', compact('datas'));
    }

    public function create()
    {
        //
        return view('admin.current_affairs.create');
    }

    public function store(Request $request)
    {
        //
        $data = $request->only('title', 'long_title',  'content', 'year', 'type');

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('current_affair', 'public');
            $data['image'] = $image;
        }

        $created = \App\CurrentAffair::create($data);

        if ($created) {
            return redirect()->route('admin.current.affairs.index')->with('success', 'Current Affair Created Succesfully');
        }else{
            return redirect()->route('admin.current.affairs.index')->with('error', 'Error while Creating Current Affair');
        }



    }

    public function edit(CurrentAffair $current_affair)
    {
        //
        return view('admin.current_affairs.edit', compact('current_affair'));
    }


    public function update(Request $request, CurrentAffair $current_affair)
    {
        //
        $data = $request->only('title', 'long_title', 'image', 'content', 'type');

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('current_affair', 'public');

            // delete old image
            Storage::disk('public')->delete($current_affair->image);
            $data['image'] = $image;

        }

        $current_affair->update($data);
        return redirect()->route('admin.current.affairs.index')->with('success', 'Data Updated Successfully');
    }

    public function destroy(CurrentAffair $current_affair)
    {
        //
        $current_affair->delete();
        return redirect()->route('admin.current.affairs.index')->with('success', 'Data Deleted Successfully');
    }
}
