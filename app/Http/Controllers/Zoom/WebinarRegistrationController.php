<?php

namespace App\Http\Controllers\Zoom;

use App\Http\Controllers\Controller;
use App\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebinarRegistrationController extends Controller
{

    private $zoomJwtToken;


    public function __construct() {
        $this->zoomJwtToken = env('ZOOM_JWT_TOKEN', null);
    }

    public function create($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->zoomJwtToken,
            'Content-Type' => 'application/json',
        ])->get('https://api.zoom.us/v2/webinars/' . $id);
        $response = $response->json();
        return view('zoom.create', compact('id', 'response'));
    }

    public function store(Request $request){
        $data = $request->only(['first_name', 'last_name', 'email', 'confirm_email', 'city', 'phone', 'state', 'webinar_id']);

        if($data['email'] != $data['confirm_email']){
            return redirect()->back()->with('error', 'Emails do not match');
        }
        $state['custom_questions'] = [
                [
                    'title' => 'Your State',
                    'value' => $data['state']
                ]
            ];
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->zoomJwtToken,
            'Content-Type' => 'application/json',
        ])->post('https://api.zoom.us/v2/webinars/' . $data['webinar_id'] . '/registrants', [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'city' => $data['city'],
            'state' => $data['state'],
            'phone' => $data['phone'],
              'custom_questions' => $state['custom_questions'],
        ]);

        if ($response->failed()){
            return redirect()->back()->with('error', $response->json()['message']);
        }

        return redirect()->back()->with('success', 'Registration for Webinar Is Complete, Check your Mail for link');

    }
}
