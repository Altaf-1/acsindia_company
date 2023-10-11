<?php

namespace App\Http\Controllers;

use App\Chat;
use App\ChatStudent;
use App\ChatTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $teachers = ChatTeacher::latest()->get();
        return view('user.chat.index', compact('teachers'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function teacherIndex()
    {
        $students = ChatStudent::where("teacher_id", Auth::user()->id)->get()->sortByDesc('notify');
        return view('user.chat.teacher_index', compact('students'));
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function chatPanel($id)
    {
        /**
         * Chat part for teacher
         */
        if (ChatTeacher::where("user_id", Auth::user()->id)
            ->get()
            ->first()) {
            $chatExists = ChatStudent::where("teacher_id", Auth::user()->id)
                ->where("student_id", $id)
                ->get()
                ->first();

            if ($chatExists->notify == 1) {
                $chatExists->notify = 0;
                $chatExists->save();
            }

            $chats = Chat::where("chat_id", $chatExists->id)->get();
            return view('user.chat.chat_panel', compact('chatExists', 'chats', "id"));
        }

        /**
         * Chat part for student
         */
        $chatExists = ChatStudent::where("teacher_id", $id)
            ->where("student_id", Auth::user()->id)
            ->get()
            ->first();


        if ($chatExists === null) {
            //create chat panel
            $chatExists = ChatStudent::create([
                'student_id' => Auth::user()->id,
                'teacher_id' => $id
            ]);

            $firstChat = [
              "chat_id" => $chatExists->id,
              "sender_id" => Auth::user()->id,
              "receiver_id" => $id,
                "message" => ""
            ];

            Chat::create($firstChat);
            $chats = Chat::where("chat_id", $chatExists->id)->get();
            return view('user.chat.chat_panel', compact('chatExists', 'chats', "id"));
        } else {
            $chats = Chat::where("chat_id", $chatExists->id)->get();
            return view('user.chat.chat_panel', compact('chatExists', 'chats', "id"));
        }
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['message', 'receiver', 'chat_id', 'user_id']);

        Chat::create([
            'chat_id' =>  $data['chat_id'],
            'sender_id' => $data['user_id'],
            'receiver_id' => $data['receiver'],
            'message' => $data['message']
        ]);

        return response()->json(['message'=> "message saved"]);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function notifyTeacher($id)
    {
        $notifyChat = ChatStudent::findOrFail($id);
        $notifyChat->notify = 1;
        $notifyChat->save();
        return redirect()->back();
    }
}
