<?php

namespace App\Http\Controllers\AdminController;

use App\ChatTeacher;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminChatController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $teachers = ChatTeacher::latest()->get();
        $users = User::all();
        return view('admin.chat.index', compact('teachers', 'users'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $email = $request->only(['email']);

        $emailExists = User::where("email", $email)->get()->first();


        if ($emailExists === null) {
            return redirect()->back()->with('warning', "Email id does not Exists");
        }

        ChatTeacher::create([
            "user_id" => $emailExists->id
        ]);

        return redirect()->back()->with('success', $emailExists->name . " is successfully added as chat Teacher");
    }
    
        /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function teacherStatusChange($id)
    {
        $chat = ChatTeacher::findOrFail($id);
        if ($chat->status) {
            $chat->status = 0;
        } else {
            $chat->status = 1;
        }
        $chat->save();

        return redirect()->back()->with('success', 'Teacher Status Changed');
    }


}
