@extends('layouts.main')
@section('title')
    User Profile
@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
@endsection

@section('styles')
    <style>
        .fa {
            color: #134982;
             !important;
        }

    </style>
@endsection

@section('content')

    <!--navbar-->
    <section id="header" class="transparent-header">
        <!-- #navigation start -->
        @include('partials.navbar')
        <!-- #navigation end -->
    </section>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!--about user-->
    <section class="user_profile" style="background-color: #134982 !important;">
        <div class="container box">
            <div class="user_inner">
                <div class="user_description">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 text-center">
                            <img class="rounded-circle image-responsive profile-img image-fluid p-2"
                                src="{{ asset($user->photo_id ? 'storage/' . $user->photo->photo_path : 'comimages/profile.png') }}"
                                alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                            <div class="personal_text ">
                                <h3>{{ $user->name }} </h3>
                                <ul class="list basic_info">
                                    <li><a href="#"><i class="fa fa-user base-color"></i> ACS-{{ $user->id }}
                                            (Unique Identification Number)</a></li>
                                    <li><a href="#"><i class="fa fa-phone base-color"></i> {{ $user->phone }}</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-envelope base-color"></i> {{ $user->email }}</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-globe base-color "></i>{{ $user->district }}
                                            , {{ $user->state }}</a></li>
                                </ul>



                                <br>
                                @php
                                    $unHide = true;
                                @endphp
                                @foreach ($user->study_materials as $course)
                                    @if ($course->title == 'MOCK TEST (OFFLINE)')
                                        @php
                                            $unHide = false;
                                        @endphp
                                        <button class="btn button text-white mt-4" style="background-color: #345c72;"
                                            onclick="registration({{ $user->id }})"><i class="fas fa-user-edit"></i>
                                            Registration For Offline Exam
                                        </button>
                                        <br>
                                    @endif
                                @endforeach
                                @if ($unHide)
                                    <button class="btn button text-white mt-4" style="background-color: #345c72;"
                                        onclick="editProfile({{ $user->id }})"><i class="fas fa-user-edit"></i>
                                        Add Postal Address
                                    </button>
                                    <!--additional subject part-->
                                        @if ($user->subjectChoose($user->id))
                                    <div class="p-0 mt-3">
                                            @if ($user->subject)
                                                <h5>Additional Subject : {{ $user->subject }}</h5><br>
                                                <button class="btn color-two button text-white"
                                                    onclick="subject({{ $user->id }})"><i class="fas fa-user-edit"></i>
                                                    Change Optional Subject
                                                </button>
                                            @else
                                                <button class="btn color-two button text-white mt-4"
                                                    onclick="subject({{ $user->id }})"><i class="fas fa-user-edit"></i>
                                                    Select Optional Subject
                                                </button>
                                            @endif
                                            
                                           <div class="">
                    <div class="container mt-2">
                            <div class="row justify-content-center text-center">
                                <div class="col-lg-12 p-0">
                                    <div class="section-title with-p bg-danger text-white pt-2 pb-2">
                                        <h5 class="text-white">Tracking ID: {{$tracking->tracking_id ?? ''}}  </h5>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                                    </div>
                                        @else
                                        @endif
                                    <!--additional subject part end-->
                                @endif
                                     
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Chat panel-->
    <!--@if (\App\ChatTeacher::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->get()->first())-->
    <!--    <div>-->
    <!--        <a href="{{ route('user.chat.teacher-index') }}"-->
    <!--            style="background-color: orange; border-radius : 50%; float: right"-->
    <!--            class="btn button mb-2 text-white ml-4 mt-3 p-5 shadow-lg"><i class="fas fa-comment"></i>-->
    <!--            Chats Panel-->
    <!--        </a>-->
    <!--    </div>-->
    <!--@else-->
    <!--    <div>-->
    <!--        <a href="{{ route('user.chat.index') }}" style="background-color: orange; border-radius : 50%; float: right"-->
    <!--            class="btn button mb-2 text-white ml-4 mt-3 p-5 shadow-lg"><i class="fas fa-comment"></i>-->
    <!--            Chats-->
    <!--        </a>-->
    <!--    </div>-->
    <!--@endif-->

    <!--section task-->
    @if (Auth::user()->role === 'admin')
        <section class="task p-4">
            <section class="user_profile task border p-5">
                <!-- .container -->
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('user.task-given.index') }}" style="background-color: white"
                            class="btn button mb-2"><i class="fas fa-user-edit"></i>
                            Task Given
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('user.task-complete.index') }}" style="background-color: white"
                            class="btn button  mb-2"><i class="fas fa-user-edit"></i>
                            Task Complete
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('user.daily-task.index') }}" style="background-color: white"
                            class="btn  button mb-2"><i class="fas fa-user-edit"></i>
                            Daily Task
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('user.leave.index') }}" style="background-color: white"
                            class="btn button  mb-2"><i class="fas fa-user-edit"></i>
                            Leave Request
                        </a>
                    </div>
                </div>
                <!-- apsc courses-->
            </section>
        </section>
    @endif
    <!--courses -->
    <section class="">
        <div class="wrap-bg ">
            <div class="container">
                @if ($payments->count() > 0)
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <div class="section-title with-p">
                                <h2>Pending course Requests</h2>
                            </div>
                        </div>
                    </div>
                @endif
                @forelse($payments as $payment)
                    <div class="row">
                        <div class="col-sm-12 p-3">
                            <div class="card payment-card shadow">
                                <!-- single teacher -->
                                <div class="card-header card-pending text-white">{{ $payment->course->title }}</div>
                                <div class="card-body " style="text-align: start">
                                    <div style="text-align: start">
                                        Payment Reference Id: <strong>{{ $payment->id }}</strong><br>
                                        Course : <strong>{{ $payment->course->title }}</strong> <br>
                                        Paid Using: <strong>{{ $payment->payment_type }}</strong> <br>
                                        Paid On : <strong>{{ $payment->created_at }}</strong>
                                    </div>
                                    <br>
                                    <strong> Your Request for {{ $payment->course->title }} course is in process , Please
                                        wait for our Executives
                                        to call you for further verification of the payment. This will take approximately
                                        one day for confirmation
                                        . For any further delay you can contact our customer service provides. Thank you for
                                        your patience.</strong>

                                </div>
                            </div>
                            <!-- end single teacher -->
                        </div>

                    </div>
            </div>
        </div>
    @empty
        @endforelse

        <div class="wrap-bg ">
            <div class="container">
                @forelse($installments as $installment)
                    <div class="row">
                        <div class="col-sm-12 p-3">
                            <div class="card payment-card shadow">
                                <!-- single teacher -->
                                <div class="card-header card-pending text-white">NOTICE</div>
                                <div class="card-body " style="text-align: start">
                                    <div style="text-align: start">
                                        Payment id: <strong>{{ $installment->id }}</strong><br>
                                        Course :
                                        <strong>{{ $installment->getCourseName($installment->course_id, $installment->unique_course_id, 'title')->result }}</strong>
                                        <br>
                                        Paid Using: <strong>Installment</strong> <br>
                                        Installment Paid : <strong>₹ {{ $installment->amount_paid }}</strong> <br>
                                        @if ($installment->amount_paid)
                                            Due Payment : <strong>₹
                                                {{ $installment->getCourseName($installment->course_id, $installment->unique_course_id, 'sale')->result - $installment->amount_paid }}
                                                <i>( Pay the amount within 1 month or your course will be suspended
                                                    )</i></strong> <br>
                                        @endif
                                    </div>
                                    <br>
                                    <strong> Your Request for
                                        {{ $installment->getCourseName($installment->course_id, $installment->unique_course_id, 'title')->result }}
                                        course is in process , Please wait for our Executives
                                        to call you for further verification of the payment. This will take approximately
                                        one day for confirmation
                                        . For any further delay you can contact our customer service provides. Thank you for
                                        your patience.</strong>

                                </div>
                            </div>
                            <!-- end single teacher -->
                        </div>

                    </div>
                @empty
                @endforelse
            </div>
        </div>


        @forelse($apscs as $apsc)
            <div class="row">
                <div class="col-sm-12 p-3">
                    <div class="card payment-card shadow">
                        <!-- single teacher -->
                        <div class="card-header card-pending text-white">{{ $apsc->apsc_course->title }}</div>
                        <div class="card-body " style="text-align: start">
                            <div style="text-align: start">
                                Payment Reference Id: <strong>{{ $apsc->id }}</strong><br>
                                Course : <strong>{{ $apsc->apsc_course->title }}</strong> <br>
                                Paid Using: <strong>{{ $apsc->payment_type }}</strong> <br>
                                Paid On : <strong>{{ $apsc->created_at }}</strong>
                            </div>
                            <br>
                            <strong> Your Request for {{ $apsc->apsc_course->title }} course is in process , Please wait
                                for our Executives
                                to call you for further verification of the payment. This will take approximately one day
                                for confirmation
                                . For any further delay you can contact our customer service provides. Thank you for your
                                patience.</strong>

                        </div>
                    </div>
                    <!-- end single teacher -->
                </div>

            </div>
            </div>
            </div>
        @empty
        @endforelse

        @forelse($studies as $study)
            <div class="row">
                <div class="col-sm-12 p-3">
                    <div class="card payment-card shadow">
                        <!-- single teacher -->
                        <div class="card-header card-pending text-white">{{ $study->study_material->title }}</div>
                        <div class="card-body " style="text-align: start">
                            <div style="text-align: start">
                                Payment Reference Id: <strong>{{ $study->id }}</strong><br>
                                Course : <strong>{{ $study->study_material->title }}</strong> <br>
                                Paid Using: <strong>{{ $study->payment_type }}</strong> <br>
                                Paid On : <strong>{{ $study->created_at }}</strong>
                            </div>
                            <br>
                            <strong> Your Request for {{ $study->study_material->title }} course is in process , Please
                                wait
                                for our Executives
                                to call you for further verification of the payment. This will take approximately one
                                day for confirmation
                                . For any further delay you can contact our customer service provides. Thank you for
                                your patience.</strong>

                        </div>
                    </div>
                    <!-- end single teacher -->
                </div>

            </div>
        @empty
        @endforelse
        @forelse($records as $recorded)
            <div class="row">
                <div class="col-sm-12 p-3">
                    <div class="card payment-card shadow">
                        <!-- single teacher -->
                        <div class="card-header card-pending text-white">{{ $recorded->recorded->title }}</div>
                        <div class="card-body " style="text-align: start">
                            <div style="text-align: start">
                                Payment Reference Id: <strong>{{ $recorded->id }}</strong><br>
                                Course : <strong>{{ $recorded->recorded->title }}</strong> <br>
                                Paid Using: <strong>{{ $recorded->payment_type }}</strong> <br>
                                Paid On : <strong>{{ $recorded->created_at }}</strong>
                            </div>
                            <br>
                            <strong> Your Request for {{ $recorded->recorded->title }} course is in process , Please wait
                                for our Executives
                                to call you for further verification of the payment. This will take approximately one
                                day for confirmation
                                . For any further delay you can contact our customer service provides. Thank you for
                                your patience.</strong>

                        </div>
                    </div>
                    <!-- end single teacher -->
                </div>

            </div>
        @empty
        @endforelse

        <!--@if (Auth::user()->noCourses() == false)-->
        <!--    <div class="container-fluid mt-5">-->
        <!--        <div class="post-heading-center section-title mb-60">-->
        <!--            <h2>ACTIVITIES</h2>-->
        <!--        </div>-->
        <!--        <div class="row ml-2 mr-2">-->
                    <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">-->
                    <!-- 2 -->
                    <!--    <div class="single-features-light text-center">-->
                    <!-- single features -->
                    <!--        <div>-->
                    <!--            <i class="base-color far fa-bell fa-3x"></i>-->
                    <!--            <h4>NOTIFICATIONS</h4>-->
                    <!--            <a href="{{ route('notifications.index') }}"-->
                    <!--                class="btn color-two button text-white">View</a>-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--</div>-->
                    <!-- end single features -->
        <!--            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">-->
        <!--                <div class="single-features-light text-center">-->
                            <!-- single features -->
        <!--                    <div>-->
        <!--                        <i class="base-color fas fa-clipboard fa-3x"></i>-->
        <!--                        <h4>ANSWER WRITING</h4>-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-12">-->
        <!--                                <a href="{{ route('article.create') }}"-->
        <!--                                    class=" btn color-two button text-white">Submit</a> <a-->
        <!--                                    href="{{ route('article.index') }}"-->
        <!--                                    class=" btn color-two button text-white">View</a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">-->
        <!--                <div class="single-features-light text-center">-->
                            <!-- single features -->
        <!--                    <div>-->
        <!--                        <i class="base-color fas fa-clipboard fa-3x"></i>-->
        <!--                        <h4>EXAM GRAPH</h4>-->
        <!--                        <a href="{{ route('user.result-graph.show') }}"-->
        <!--                            class=" btn color-two button text-white">View</a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->


        <!--            {{-- Daily News --}}-->
        <!--            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">-->
                        <!-- 2 -->
        <!--                <div class="single-features-light text-center">-->
                            <!-- single features -->
        <!--                    <div>-->
        <!--                        <i class="base-color far fa-bell fa-3x"></i>-->
        <!--                        <h4>DAILY NEWS ANAYLSIS</h4>-->
        <!--                        <a href="{{ route('dailynews.index') }}" class="btn color-two button text-white">View</a>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->
        <!--            {{-- Assignments --}}-->
        <!--            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-2">-->
        <!--                <div class="single-features-light text-center">-->
                            <!-- single features -->
        <!--                    <div>-->
        <!--                        <i class="base-color fas fa-clipboard fa-3x"></i>-->
        <!--                        <h4>ASSIGNMENTS</h4>-->
        <!--                        <a href="{{ route('assignments.index') }}"-->
        <!--                            class="btn color-two button text-white">View</a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <hr>-->
        <!--@endif-->
        
        

        @if (Auth::user()->role == 'user' && Auth::user()->noCourses())
            <div class="container-fluid mt-5">
                <div class="post-heading-center section-title mb-60">
                    <h2>FREE TRIAL COURSE</h2>
                </div>
                <div class="row ml-2 mr-2">
                    <div class="row ml-2 mr-2">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <!-- 2 -->
                            <div class="single-features-light text-center">
                                <!-- single features -->
                                <div>
                                    <i class="base-color fas fa-book fa-3x"></i>
                                    <h4>STUDY PLAN</h4>
                                    <a href="{{ route('enroll') }}" class=" btn color-two button text-white">ENROLL</a>
                                </div>
                            </div>
                            <!-- end single features -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <!-- 2 -->
                            <div class="single-features-light text-center">
                                <!-- single features -->
                                <div>
                                    <i class="base-color fas fa-book fa-3x"></i>
                                    <h4>ACS MATERIALS</h4>
                                    <a href="{{ route('enroll') }}" class=" btn color-two button text-white">ENROLL</a>
                                </div>
                            </div>
                            <!-- end single features -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <!-- 1 -->
                            <div class="single-features-light text-center">
                                <!-- single features -->
                                <div>
                                    <!-- uses solid style -->
                                    <i class="base-color fas fa-book fa-3x"></i>
                                    <h4>PREVIOUS QUESTION PAPER</h4>
                                    <a href="{{ route('enroll') }}" class=" btn color-two button text-white">ENROLL</a>
                                </div>
                            </div>
                            <!-- end single features -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <!-- 2 -->
                            <div class="single-features-light text-center">
                                <!-- single features -->
                                <div>
                                    <i class="base-color fas fa-book fa-3x"></i>
                                    <h4>TEST SERIES</h4>
                                    <a href="{{ route('user.lifetimeaccessibleaccount.test', 'LIFE TIME ACCESSIBLE ACCOUNT') }}"
                                        class=" btn color-two button text-white">VIEW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <!-- 2 -->
                            <div class="single-features-light text-center">
                                <!-- single features -->
                                <div>
                                    <i class="base-color fas fa-book fa-3x"></i>
                                    <h4>RECORDED CLASSES</h4>
                                    <a href="{{ route('user.new.video', 'LIFE TIME ACCESSIBLE ACCOUNT') }}"
                                        class=" btn color-two button text-white">View</a>
                                </div>
                            </div>
                            <!-- end single features -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="single-features-light text-center">
                                <!-- single features -->
                                <div>
                                    <i class="base-color fas fa-book fa-3x"></i>
                                    <h4>MAINS (PYQ)</h4>
                                    <a href="{{ route('enroll') }}" class=" btn color-two button text-white">ENROLL</a>
                                </div>
                            </div>
                        </div>
                        <!-- 100 current affairs -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="single-features-light text-center">
                                <div>
                                    <i class="base-color fab fa-leanpub fa-3x"></i>
                                    <h4>100 important current affairs</h4>
                                    <a href="{{ asset('pdf/ACS Prelims Current Affairs 2022 (100).pdf') }}"
                                        target="_blank" class="btn color-two button text-white">VIEW</a>
                                </div>
                            </div>
                        </div>
                        <!-- REPORTS AND INDICES 2022 COMPILATION -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="single-features-light text-center">
                                <div>
                                    <i class="base-color fab fa-leanpub fa-3x"></i>
                                    <h4>REPORTS AND INDICES 2022 COMPILATION</h4>
                                    <a href="{{ asset('pdf/ACS Indices Reports Combilaions.pdf') }}" target="_blank"
                                        class="btn color-two button text-white">VIEW</a>
                                </div>
                            </div>
                        </div>
                        <!-- INTERNATIONAL ORGANIZATIONS/INSTITUTIONS/GROUPINGS IN NEWS -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="single-features-light text-center">
                                <div>
                                    <i class="base-color fab fa-leanpub fa-3x"></i>
                                    <h4>INTERNATIONAL ORGANIZATIONS/ INSTITUTIONS/ GROUPINGS IN NEWS</h4>
                                    <a href="{{ asset('pdf/ACSInternationalOrganizationCombilaions.pdf') }}"
                                        target="_blank" class="btn color-two button text-white">VIEW</a>
                                </div>
                            </div>
                        </div>
                        <!-- current affair question compilation -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="single-features-light text-center">
                                <div>
                                    <i class="base-color fab fa-leanpub fa-3x"></i>
                                    <h4>ACS CURRENT AFFAIRS QUESTIONS COMPILATION</h4>
                                    <a href="{{ asset('pdf/ACSPrelimsCurrentAffairsQuestionsCompilation22.pdf') }}"
                                        target="_blank" class="btn color-two button text-white">VIEW</a>
                                </div>
                            </div>
                        </div>
                        {{-- acs wisdom --}}
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="single-features-light text-center">
                                <div>
                                    <i class="base-color fab fa-leanpub fa-3x"></i>
                                    <h4>ACS WISDOM</h4>
                                    <a href="{{ route('acs.wisdom') }}" target="_blank"
                                        class="btn color-two button text-white">VIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        
         

        <div class="row ml-2 mr-2">
            @foreach ($user->courses as $course)
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                    <div class="single-features-light text-center" style="min-height:100%">
                        <div class="row">
                            <div class="col-lg-4"><i class="base-color fas fa-book fa-3x"></i></div>
                            <div class="col-lg-4"><h4>{{ $course->title }}</h4></div>
                            <div class="col-lg-4"><a href="{{ route('user.course.view', [$course, 'UPSC']) }}"
                                class=" btn color-two button text-white">VIEW</a></div>
                            <!--<i class="base-color fas fa-book fa-3x"></i>-->
                            <!--<h4>{{ $course->title }}</h4>-->
                            <!--<a href="{{ route('user.course.view', [$course, 'UPSC']) }}"-->
                            <!--    class=" btn color-two button text-white">VIEW</a>-->
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($user->apsc_courses as $course)
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                    <div class="single-features-light text-center" style="min-height:100%">
                        <div class="row">
                            
                            <div class="col-lg-4"><i class="base-color fas fa-book fa-3x"></i></div>
                            <div class="col-lg-4"><h4>{{ $course->title }}</h4></div>
                            <div class="col-lg-4"><a href="{{ route('user.course.view', [$course, 'APSC']) }}"
                                class=" btn color-two button text-white">VIEW</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($user->recorded_courses as $course)
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                    <div class="single-features-light text-center" style="min-height:100%">
                        <div class="row">
                            <div class="col-lg-4"><i class="base-color fas fa-book fa-3x"></i></div>
                            <div class="col-lg-4"><h4>{{ $course->title }}</h4></div>
                            <div class="col-lg-4"><a href="{{ route('user.course.view', [$course, 'RECORDED']) }}"
                                class=" btn color-two button text-white">VIEW</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($user->study_materials as $course)
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                    <div class="single-features-light text-center" style="min-height:100%">
                        <div class="row">
                            <div class="col-lg-4"><i class="base-color fas fa-book fa-3x"></i></div>
                            <div class="col-lg-4"><h4>{{ $course->title }}</h4></div>
                            <div class="col-lg-4"><a href="{{ route('user.course.view', [$course, 'STUDY_MATERIAL']) }}"
                                class=" btn color-two button text-white">VIEW</a></div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!--Events-->
    <!--<section id="event">-->
    <!--    <div id="events" class="wrap-bg wrap-bg-dark bg-bottom-zero ">-->
    <!--        <div class="container">-->
    <!--            <div class="row justify-content-center text-center">-->
    <!--                <div class="col-lg-8">-->
    <!--                    <div class="section-title with-p">-->
    <!--                        <h2>Events</h2>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!-- .row -->
    <!--            <div class="row justify-content-center">-->
    <!--                @forelse($user->events as $event)
    -->
    <!--                    @if ($event->status == 1)
    -->
    <!--                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 course-single mb20">-->
    <!-- 1 -->
    <!--                        <div class="themeioan_event">-->
    <!--                            <article>-->
    <!-- single event start -->
    <!--                                <div class="event-photo">-->
    <!--                                    <div class="date">-->
    <!--                                        <h4>-->
    <!--                                            <span>{{ explode(' ', $event->date)[0] }}</span> {{ explode(' ', $event->date)[1] }} {{ explode(' ', $event->date)[2] }}-->
    <!--                                        </h4>-->
    <!--                                    </div>-->
    <!--                                    <img class="img-fluid card-img" src="{{ asset('storage/' . $event->image) }}" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="event-content">-->
    <!--                                    {{-- <h5 class="title">APSC Webinar on new syllabus</h5> --}}-->
    <!--                                    <h5 class="title">{{ $event->title }}</h5>-->
    <!--<ul class="themeioan_ul_icon">-->
    <!--                          <li><i class="fas fa-check-circle"></i> Automated Software</li>-->
    <!--                          <li><i class="fas fa-check-circle"></i> Experience Design</li>-->
    <!--                          <li><i class="fas fa-check-circle"></i> Automated Software</li>-->
    <!--                          </ul>-->-->
    <!--                                    <div class="course-viewer">-->
    <!--                                        <ul>-->
    <!--                                            <li><i class="fas fa-calendar-alt"></i> {{ $event->date }}</li>-->
    <!--                                            <li><i class="fas fa-clock"></i> {{ $event->start_time }}-->
    <!--                                                - {{ $event->end_time }}</li>-->
    <!--                                            <li><i class="fas fa-map"></i> {{ $event->venue }}</li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </article>-->
    <!-- single event end-->
    <!--                        </div>-->
    <!--                    </div>-->
<!--                    @else-->
    <!--                        <p class="display-4">-->
    <!--                            No Events Attended-->
    <!--                        </p>-->
    <!--
    @endif-->
<!--                @empty-->
    <!--                    <p class="display-4">-->
    <!--                        No Events Attended-->
    <!--                    </p>-->
    <!--
    @endforelse-->
    <!--<div class="content-button btn-section"> -->
    <!--              <a href="" class="color-two btn-custom smooth-scroll">View All Events <i class="fas fa-arrow-right"></i>-->
    <!--              </a>-->
    <!--           </div>-->
    <!-- .row end -->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--end Events-->

    <!--pop up model for user profile edit-->
    <div class="modal fade" id="disapproveModal" tabindex="-1" role="dialog" aria-labelledby="disapproveModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post" id="disapproveRequestMessage" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="disapproveModalLabel">Edit Your Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Phone No:</label>
                            <input type="number" class="form-control" name="phone" value="{{ $user->phone }}" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Alternate Phone No:</label>
                            <input type="number" required class="form-control" name="alternate_phone"
                                value="{{ $user->alternate_phone }}" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Pincode:</label>
                            <input type="number" required class="form-control" name="pincode"
                                value="{{ $user->pincode }}" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Landmark:</label>
                            <input type="text" required class="form-control" name="landmark"
                                value="{{ $user->landmark }}" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">City:</label>
                            <input type="text" required class="form-control" name="city"
                                value="{{ $user->city }}" />
                        </div>


                        <div class="form-group">
                            <label for="message-text" class="col-form-label">State:</label>
                            <select id="state" type="state" class="form-control " name="state"
                                placeholder="Select State" class=”form-control”>
                                <option value="{{ $user->state }}" selected>{{ $user->state }}</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">District:</label>
                            <input type="text" class="form-control" name="district"
                                value="{{ $user->district }}" />
                        </div>

                        <div class="form-group">
                            <label for="postal" class="col-form-label">Postal Address:</label>
                            <textarea type="text" rows="4" cols="200" class="form-control" name="postal">{{ $user->postal }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="care_of" class="col-form-label">C/o:</label>
                            <input type="text" class="form-control" name="care_of" value="{{ $user->care_of }}" />
                        </div>


                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Profile Pic:</label>
                            <input type="file" class="form-control" name="image" />
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Close</button>
                            <button class="btn color-two button text-white " type="submit"><i
                                    class="fas fa-user-edit"></i>Save</button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
    <!--pop up model end-->

    <!--pop up model for addtional subject-->
    <div class="modal fade" id="subjectModal" tabindex="-1" role="dialog" aria-labelledby="subjectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post" id="additionalSubject" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="subjectModalLabel">Select additional subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" disabled class="form-control" name="name"
                                value="{{ $user->name }}" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="email" disabled class="form-control" name="email"
                                value="{{ $user->email }}" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Phone No:</label>
                            <input type="number" disabled class="form-control" name="phone"
                                value="{{ $user->phone }}" />
                        </div>


                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Optional Subject:</label>
                            <select type="text" class="form-control " name="subject" placeholder="Select Subject"
                                class=”form-control”>
                                @if ($user->subject)
                                    <option value="{{ $user->subject }}" selected>{{ $user->subject }}</option>
                                @else
                                    <option selected>Select an option</option>
                                @endif
                                <option value="Agriculture">Agriculture</option>
                                <option value="Animal Husbandry and Veterinary Science">Animal Husbandry and Veterinary
                                    Science</option>
                                <option value="Anthropology">Anthropology</option>
                                <option value="Assamese Literature">Assamese Literature</option>
                                <option value="Bodo Literature">Bodo Literature</option>
                                <option value="Bengali Literature">Bengali Literature</option>
                                <option value="Botany">Botany</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Commerce and Accountancy">Commerce and Accountancy</option>
                                <option value="Dogri Literature">Dogri Literature</option>
                                <option value="Economics">Economics</option>
                                <option value="Electrical Engineering">Electrical Engineering</option>
                                <option value="English Literature">English Literature</option>
                                <option value="Geography">Geography</option>
                                <option value="Geology">Geology</option>
                                <option value="Gujarati Literature">Gujarati Literature</option>
                                <option value="Hindi Literature">Hindi Literature</option>
                                <option value="History">History</option>
                                <option value="Kannada Literature">Kannada Literature</option>
                                <option value="Kashmiri Literature">Kashmiri Literature</option>
                                <option value="Konkani Literature">Konkani Literature</option>
                                <option value="Law">Law</option>
                                <option value="Maithili Literature">Maithili Literature</option>
                                <option value="Malayalam Literature">Malayalam Literature</option>
                                <option value="Management">Management</option>
                                <option value="Manipuri Literature">Manipuri Literature</option>
                                <option value="Marathi Literature">Marathi Literature</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Medical Science">Medical Science</option>
                                <option value="Nepali Literature">Nepali Literature</option>
                                <option value="Odia Literature">Odia Literature</option>
                                <option value="Philosophy">Philosophy</option>
                                <option value="Physics">Physics</option>
                                <option value="Political Science and International Relations">Political Science and
                                    International Relations</option>
                                <option value="Psychology">Psychology</option>
                                <option value="Public Administration">Public Administration</option>
                                <option value="Punjabi Literature">Punjabi Literature</option>
                                <option value="Sanskrit Literature">Sanskrit Literature</option>
                                <option value="Santhali Literature">Santhali Literature</option>
                                <option value="Sindhi Literature">Sindhi Literature</option>
                                <option value="Sociology">Sociology</option>
                                <option value="Statistics">Statistics</option>
                                <option value="Tamil Literature">Tamil Literature</option>
                                <option value="Telugu Literature">Telugu Literature</option>
                                <option value="Urdu Literature">Urdu Literature</option>
                                <option value="Zoology">Zoology</option>
                            </select>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Close</button>
                            <button class="btn color-two button text-white " type="submit"><i
                                    class="fas fa-user-edit"></i>Add
                            </button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
    <!--pop up model end-->

    <!--pop up model for user profile edit-->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('offline.exam.register.store') }}" method="post" id="registerRequestMessage"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerModalLabel">Register For Offline Exam</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-dark">Name:</label>
                            <input type="text" class="form-control" name="name" value="" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label text-dark">Email:</label>
                            <input type="email" class="form-control" name="email" value="" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label text-dark">Phone No:</label>
                            <input type="number" class="form-control" name="phone" value="" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label text-dark">WhatsApp No:</label>
                            <input type="number" required class="form-control" name="whatsapp_no" value="" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label text-dark">City:</label>
                            <input type="text" required class="form-control" name="city" value="" />
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-form-label text-dark">Upload Profile Pic:</label>
                            <input type="file" class="form-control" name="image" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label text-dark">Select Exam Center:</label>
                            <select id="state" type="state" class="form-control " name="state"
                                placeholder="Select State" class=”form-control”>
                                <option value="select" selected>Select Exam Center</option>
                                <option value="Dibrugarh">Dibrugarh</option>
                                <option value="Lakhimpur">Lakhimpur</option>
                                <option value="Sivasagar">Sivasagar</option>
                                <option value="Jorhat">Jorhat</option>
                                <option value="Nagaon">Nagaon</option>
                                <option value="Tezpur">Tezpur</option>
                                <option value="Guwahati">Guwahati</option>
                                <option value="Silchar">Silchar</option>
                                <option value="Borpeta">Borpeta</option>
                                <option value="Majuli">Majuli</option>
                            </select>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Close</button>
                            <button class="btn color-two button text-white " type="submit"><i
                                    class="fas fa-user-edit"></i>Save</button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
    <!--pop up model end-->


@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
    <script src='{{ asset('js/jquery-3.4.1.min.js') }}'></script>
    <script src='{{ asset('js/slick.min.js') }}'></script>
    <script src='{{ asset('js/main.js') }}'></script>

    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/jquery.fancybox.pack.js') }}'></script>
    <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('js/waypoints.min.js') }}'></script>
    <script src='{{ asset('js/jquery.counterup.min.js') }}'></script>

    <script>
        function editProfile(id) {

            var message = document.getElementById('disapproveRequestMessage')

            message.action = "/user/" + id + "/update"

            $('#disapproveModal').modal('show')
        }
    </script>

    <script>
        function subject(id) {

            var message = document.getElementById('additionalSubject')

            message.action = "/user/" + id + "/update/subject"

            $('#subjectModal').modal('show')
        }
    </script>

    <script>
        function registration(id) {
            $('#registerModal').modal('show')
        }
    </script>
@endsection
