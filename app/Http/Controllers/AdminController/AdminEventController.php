<?php

namespace App\Http\Controllers\AdminController;

use App\Event;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $search = request()->get('searchUser');


        if ($search){
            $events = Event::where("title","LIKE","%{$search}%")->paginate(10);

        }
        else{
            $events = Event::latest()->paginate(10);

        }
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // getting the data
        $data = $request->only(['title', 'description', 'date', 'start_time', 'end_time', 'image', 'venue']);

        $date =Carbon::parse($data['date']);
        $data['date']=$date->day.' '.$date->englishMonth.' '.$date->year;
        // change the date in am pm
        $start_time = Carbon::parse($data['start_time']);
        $data['start_time']=date('h:i A', strtotime($start_time));

        $end_time = Carbon::parse($data['end_time']);
        $data['end_time']=date('h:i A', strtotime($end_time));
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            //inserting image
            $image = $request->image->store('event', 'public');
            $data['image'] = $image;
        }
        // creating record
        Event::create($data);

        $events = Event::all();
        session()->flash('success', 'Event created');
        return redirect()->route('admin.event.index', compact('events'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('admin.events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('admin.events.edit', compact('event'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //getting the data
        $data = $request->only(['title', 'description', 'date', 'start_time', 'end_time', 'image', 'venue']);

        $date =Carbon::parse($data['date']);
        $data['date']=$date->day.' '.$date->englishMonth.' '.$date->year;
        // change the date in am pm
        $start_time = Carbon::parse($data['start_time']);
        $data['start_time']=date('h:i A', strtotime($start_time));

        $end_time = Carbon::parse($data['end_time']);
        $data['end_time']=date('h:i A', strtotime($end_time));

        $data['slug'] = Str::slug($data['title']);
        //find the event
        $event = Event::findOrFail($id);
        //checking if there is image or not in form
        if ($request->hasFile('image')) {
            //delete old photo
            Storage::disk('public')->delete($event->image);

            $image = $request->image->store('event', 'public');
            $data['image'] = $image;
        }
        // updating the data
        $event->update($data);

        $events = Event::all();
        session()->flash('success', 'Event Details Updated');
        return redirect()->route('admin.event.index', compact('events'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function isactive($id)
    {
        $event= Event::findOrFail($id);
        if ($event->status == 0)
        {
            $event->update([
                'status'=>1
            ]);
            session()->flash('success', 'Event is now Active :)');
            return redirect()->back();
        }
        else{
            $event->update([
                'status'=>0
            ]);
            session()->flash('success', 'Event is now Over');
            return redirect()->back();
        }
        }

}
