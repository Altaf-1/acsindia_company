@extends('layouts.main')
@section('title')
    Chat Teachers
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection


@section('styles')
    <style>

        .chatPanel {
            height: 500px;
            overflow-y: auto;
        }

        .chatPanel::-webkit-scrollbar {
            width: 10px;

        }

        /* Track */
        .chatPanel::-webkit-scrollbar-track {
            background: #fdfdfd;
        }

        /* Handle */
        .chatPanel::-webkit-scrollbar-thumb {
            background: #fea501;
            border-radius: 10px;
        }

        /* Handle on hover */
        .chatPanel::-webkit-scrollbar-thumb:hover {
            background: #fea501;
        }

        .messageBox{
            background-color: whitesmoke;
            color: black;
            padding: 10px;
            margin-top: 2px;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')

    <!--navbar-->
    <section id="header" class="transparent-header" style="background-color: orange">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </section>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <section class="container emp-profile rounded border" style="margin-top: 150px; margin-bottom: 50px;background-color: gray">
        <div class="text-center">
            @if($chatExists->student_id == \Illuminate\Support\Facades\Auth::user()->id)
                 <h3 class="text-white">Chatting with {{\App\User::findOrFail($chatExists->teacher_id)->name}}</h3>
            @else
                <h3 class="text-white">Chatting with {{\App\User::findOrFail($chatExists->student_id)->name}}</h3>
            @endif

            @if(\App\ChatTeacher::where('user_id', $chatExists->teacher_id)->first()->status)
            @if($chatExists->student_id == \Illuminate\Support\Facades\Auth::user()->id)
            @if($chatExists->notify == 0)
                <a href="{{route('user.chat.chat-notify', $chatExists->id )}}" style="background: green" class="btn btn-info text-white"><i class="fa fa-bell"></i> Notify Teacher</a>
            @else
                <p class="text-white">Your Teacher is Being notified about your query , he will get back to you soon</p>
            @endif
            @endif
            @endif

        </div>

        <div id="chatBox" class="container emp-profile rounded border chatPanel">

            @forelse($chats as $chat)
                @if($chat->message === "")
                @else
                    @if($chat->sender_id == \Illuminate\Support\Facades\Auth::user()->id)
                        <div class="p-3 w-50 mb-2 rounded border" style="margin-left: auto">
                            <div style="display:block;">
                                <img style="border-radius: 50%; width: 50px"
                                     src={{asset($chat->checkPhoto(\Illuminate\Support\Facades\Auth::user()->id)
                                        ? 'storage/'.$chat->getImage(\Illuminate\Support\Facades\Auth::user()->id)
                                        : 'comimages/profile.png')}}

                                         alt="{{$chat->getName($chat->sender_id)}}">
                                <span class="font-weight-bold">Me</span>
                            </div>
                            <p class="messageBox">
                                {{$chat->message}}
                            </p>

                            <time class="font-weight-bold" style="display: block; font-style: italic">{{\Carbon\Carbon::parse($chat->created_at, 'UTC')->isoFormat('MMMM Do YYYY, h:mm a')}}</time>
                        </div>
                    @else
                        <div class="p-3 w-50 mb-2 rounded border" style="margin-right: auto; background-color:#fea501 ">
                            <div style="display:block;">
                                <img style="border-radius: 50%; width: 50px"
                                     src={{asset($chat->checkPhoto($chat->sender_id)
                                        ? 'storage/'.$chat->getImage($chat->sender_id)
                                        : 'comimages/profile.png')}}
                                         alt="{{$chat->getName($chat->sender_id)}}">
                                <span class="font-weight-bold">{{$chat->getName($chat->sender_id)}}</span>
                            </div>
                            <p class="messageBox">
                                {{$chat->message}}
                            </p>
                            <time class="font-weight-bold" style="display: block; font-style: italic">{{\Carbon\Carbon::parse($chat->created_at, 'UTC')->isoFormat('MMMM Do YYYY, h:mm a')}}</time>
                        </div>
                    @endif
                @endif
                @empty
                    <p>Start Chatting</p>
            @endforelse
        </div>


       @if(\App\ChatTeacher::where('user_id', $chatExists->teacher_id)->first()->status)
        <form class="d-flex mt-2">
            <textarea id="message"
                      name="message"
                      required
                      class="form-control rounded-lg mr-2"></textarea>
            <button onclick="storeChat({{$id}}, {{$chatExists->id}})"
                    style="border-radius: 15px"
                    class="btn btn-primary"
                    type="button">Send</button>
        </form>
        @else
            <h3 class="text-white text-center">Teacher is not available</h3>
        @endif
    </section>



@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
    <script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
    <script src='{{asset("js/slick.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>

    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
    <script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>


    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function storeChat(id, chat_id){
            // For adding the token to axios header (add this only one time).
            var token = document.head.querySelector('meta[name="csrf-token"]');
            window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
    

            var chatData = {
                message: document.getElementById("message").value,
                receiver: id,
                chat_id : chat_id,
                user_id : {{\Illuminate\Support\Facades\Auth::user()->id}}
            }

            axios.post(`https://www.acsindiaias.com/api/chat-message/store`,chatData)
                .then(result => {
                    document.getElementById("message").value = "";
                    loadPage();
                })
                .catch(err => {
                    console.log(err);
                })
        }


        function loadPage() {
            $("#chatBox").load(location.href + " #chatBox>*", "");
            scrollToBottom();
        }

        window.onload = function() {
            scrollToBottom();
        };

        function scrollToBottom () {
            var element = document.getElementById("chatBox");
            element.scrollTop = element.scrollHeight;
        }

        setInterval(function () {
                $("#chatBox").load(location.href + " #chatBox>*", "");
                scrollToBottom();
        }, 10000);
    </script>


@endsection

