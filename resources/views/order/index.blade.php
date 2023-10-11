@extends('layouts.main')
@section('title')
    User Profile
@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
@endsection


@section('styles')
    <style>
        .fa {
            color: #fb770c;
             !important;
        }
    </style>
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!--navbar-->
    <section id="header" style="background-image: url({{ asset('comimages/bk3.webp') }});">
        <!-- #navigation start -->
        @include('partials.navbar')
        <!-- #navigation end -->
    </section>
    <div class="container-fluid p-2">
        <div class="row justify-content-center text-center p-4">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>My Orders</h2>
                </div>
            </div>
        </div>

        <div class="row p-4">
            <div class="col-lg-8">
                <div class="section-title ">
                    <h3 style="color: #fb770c">HDFC Payments</h3>
                </div>
            </div>
        </div>
        @forelse($hdfcOrders as $hdfcOrder)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                         <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Order ID</strong></div>
                                <div class="col-sm-12">{{ $hdfcOrder->order_id }}</div>
                            </div>
                        </div>
                         <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Payment ID</strong></div>
                                <div class="col-sm-12">{{ $hdfcOrder->payment_id }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $hdfcOrder->course->title }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $hdfcOrder->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($hdfcOrder->status == 0)
                                        Pending
                                    @elseif($hdfcOrder->status == 1)
                                        Successful
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>
                       @php
                         if ($hdfcOrder->course_type == 'upsc') {
                            $paymentCompleteRoute = 'hdfc.payment.complete';
                         }

                        if ($hdfcOrder->course_type == 'apsc') {
                            $paymentCompleteRoute = 'hdfc.payment.apsc.complete';
                        }

                        if ($hdfcOrder->course_type == 'recorded') {
                            $paymentCompleteRoute = 'hdfc.payment.recorded.complete';
                        }

                        if ($hdfcOrder->course_type == 'study') {
                            $paymentCompleteRoute = 'hdfc.payment.study-material.complete';
                        }

                       @endphp

                        @if ($hdfcOrder->status != 1)
                            <div class="col-sm-1"><a href="{{ route($paymentCompleteRoute, $hdfcOrder->id) }}"
                                                     class="btn btn-primary text-white">Click Here To Pay</a></div>
                        @endif
                        <div class="col-sm-1"><a href="{{ route('user.show', Auth::user()->id) }}"
                                                 class="btn btn-primary text-white">Go to Course</a></div>
                        @if ($hdfcOrder->status == 1)
                            @if (\App\Invoice::where('payment_id', $hdfcOrder->payment_id)->get()->isEmpty())
                                <div class=" col-sm-1"><a href="{{ route('user.order.upsc.invoice', $hdfcOrder->id) }}"
                                                          class="btn btn-primary text-white">Invoice</a></div>
                            @else
                                <div class=" col-sm-1"><a href="{{ route('user.order.invoice.show', $hdfcOrder->payment_id) }}"
                                                          class="btn btn-primary text-white">Show Invoice</a></div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="card">
                <div class="card-body">
                    No Orders
                </div>
            </div>
        @endforelse



        <div class="row p-4">
            <div class="col-lg-8">
                <div class="section-title ">
                    <h3 style="color: #fb770c">Razorpay Payments</h3>
                </div>
            </div>
        </div>
        @forelse($orders as $order)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $order->course->title }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $order->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($order->status == 0)
                                        Pending
                                    @elseif($order->status == 1)
                                        Successful
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if ($order->status != 1)
                        <div class="col-sm-2"><a href="{{ route('order.show', $order->id) }}"
                                class="btn btn-primary text-white">Click Here To Pay</a></div>
                        @endif
                        <div class="col-sm-2"><a href="{{ route('user.show', Auth::user()->id) }}"
                                class="btn btn-primary text-white">Go to Course</a></div>
                        @if ($order->status == 1)
                            @if (\App\Invoice::where('payment_id', $order->payment_id)->get()->isEmpty())
                                <div class=" col-sm-2"><a href="{{ route('user.order.upsc.invoice', $order->id) }}"
                                        class="btn btn-primary text-white">Invoice</a></div>
                            @else
                                <div class=" col-sm-2"><a href="{{ route('user.order.invoice.show', $order->payment_id) }}"
                                        class="btn btn-primary text-white">Show Invoice</a></div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="card">
                <div class="card-body">
                    No Orders
                </div>
            </div>
        @endforelse

        @foreach ($apscs as $apsc)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $apsc->apsc_course->title }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $apsc->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($apsc->status == 0)
                                        Pending
                                    @elseif($apsc->status == 1)
                                        Successful
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if ($apsc->status != 1)
                            <div class="col-sm-2">
                                <a href="{{ route('apsc.order.show', $apsc->id) }}"
                                    class="btn btn-primary text-white">Click here to Pay </a>
                            </div>
                        @endif
                        <div class="col-sm-2"><a href="{{ route('user.show', Auth::user()->id) }}"
                                class="btn btn-primary text-white">Go to Course</a></div>
                        @if ($apsc->status == 1)
                            @if (\App\Invoice::where('payment_id', $apsc->payment_id)->get()->isEmpty())
                                <div class=" col-sm-2"><a href="{{ route('user.order.apsc.invoice', $apsc->id) }}"
                                        class="btn btn-primary text-white">Invoice</a></div>
                            @else
                                <div class=" col-sm-2"><a href="{{ route('user.order.invoice.show', $apsc->payment_id) }}"
                                        class="btn btn-primary text-white">Show Invoice</a></div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        @foreach ($studies as $study)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $study->study_material->title }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $study->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($study->status == 0)
                                        Pending
                                    @elseif($study->status == 1)
                                        Successful
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if ($study->status != 1)
                        <div class="col-sm-2"><a href="{{ route('study.material.show', $study->id) }}"
                                class="btn btn-primary text-white">Click Here To Pay</a></div>
                        @endif
                        <div class="col-sm-2"><a href="{{ route('user.show', Auth::user()->id) }}"
                                class="btn btn-primary text-white">Go to Course</a></div>
                        @if ($study->status == 1)
                            @if (\App\Invoice::where('payment_id', $study->payment_id)->get()->isEmpty())
                                <div class=" col-sm-2"><a href="{{ route('user.study.razor.invoice', $study->id) }}"
                                        class="btn btn-primary text-white">Invoice</a></div>
                            @else
                                <div class=" col-sm-2"><a
                                        href="{{ route('user.order.invoice.show', $study->payment_id) }}"
                                        class="btn btn-primary text-white">Show Invoice</a></div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        @foreach ($records as $record)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $record->recorded ? $record->recorded['title'] : '' }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $record->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($record->status == 0)
                                        Pending
                                    @elseif($record->status == 1)
                                        Successful
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if ($record->status != 1)
                            <div class="col-sm-2"><a href="{{ route('recorded.order.show', $record->id) }}"
                                    class="btn btn-primary text-white">Click Here To Pay</a></div>
                        @endif

                        <div class="col-sm-2"><a href="{{ route('user.show', Auth::user()->id) }}"
                                class="btn btn-primary text-white">Go to Course</a></div>
                        @if ($record->status == 1)
                            @if (\App\Invoice::where('payment_id', $record->payment_id)->get()->isEmpty())
                                <div class=" col-sm-2"><a href="{{ route('user.study.razor.invoice', $record->id) }}"
                                        class="btn btn-primary text-white">Invoice</a></div>
                            @else
                                <div class=" col-sm-2"><a
                                        href="{{ route('user.order.invoice.show', $record->payment_id) }}"
                                        class="btn btn-primary text-white">Show Invoice</a></div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @endforeach



        <hr>
        <!--bank transfer-->
        <div class="row p-4">
            <div class="col-lg-8">
                <div class="section-title">
                    <h3 style="color: #fb770c">Bank Payments</h3>
                </div>
            </div>
        </div>
        @foreach ($apsc_payments as $apsc_payment)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $apsc_payment->apsc_course->title }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $apsc_payment->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($apsc_payment->status == 0)
                                        Pending
                                    @elseif($apsc_payment->status == 1)
                                        Successful
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"><a href="{{ route('user.show', Auth::user()->id) }}"
                                class="btn btn-primary text-white">Go to Course</a></div>
                        @if ($apsc_payment->status == 1)
                            <div class="col-sm-2"><a href="{{ route('user.apsc.payment.invoice', $apsc_payment->id) }}"
                                    class="btn btn-primary text-white">Show Invoice</a></div>
                        @endif
                    </div>

                </div>
            </div>
        @endforeach

        @foreach ($upsc_payments as $upsc_payment)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $upsc_payment->course->title }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $upsc_payment->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($upsc_payment->status == 0)
                                        Pending
                                    @elseif($upsc_payment->status == 1)
                                        Successful
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"><a href="{{ route('user.show', Auth::user()->id) }}"
                                class="btn btn-primary text-white">Go to Course</a></div>
                        @if ($upsc_payment->status == 1)
                            <div class="col-sm-2"><a href="{{ route('user.upsc.payment.invoice', $upsc_payment->id) }}"
                                    class="btn btn-primary text-white">Show Invoice</a></div>
                        @endif
                    </div>

                </div>
            </div>
        @endforeach

        @foreach ($study_payments as $study_payment)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $study_payment->study_material->title }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $study_payment->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($study_payment->status == 0)
                                        Pending
                                    @elseif($study_payment->status == 1)
                                        Successfull
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"><a href="{{ route('user.show', Auth::user()->id) }}"
                                class="btn btn-primary text-white">Go to Course</a></div>
                        @if ($study_payment->status == 1)
                            <div class="col-sm-2"><a href="{{ route('user.study.bank.invoice', $study_payment->id) }}"
                                    class="btn btn-primary text-white">Show Invoice</a></div>
                        @endif
                    </div>

                </div>
            </div>
        @endforeach

        @foreach ($record_payments as $record_payment)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Course Name</strong></div>
                                <div class="col-sm-12">{{ $record_payment->recorded->title }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Purchased Date</strong></div>
                                <div class="col-sm-12">{{ $record_payment->created_at }}</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="col-sm-12"><strong>Status</strong></div>
                                <div class="col-sm-12">
                                    @if ($record_payment->status == 0)
                                        Pending
                                    @elseif($record_payment->status == 1)
                                        Successful
                                    @else
                                        Rejected
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"><a href="{{ route('user.show', Auth::user()->id) }}"
                                class="btn btn-primary text-white">Go to Course</a></div>
                        {{--                        @if ($record_payment->status == 1) --}}
                        {{--                            <div class="col-sm-2"><a href="{{route('user.study.bank.invoice', $record_payment->id)}}" class="btn btn-primary text-white">Show Invoice</a></div> --}}
                        {{--                        @endif --}}
                    </div>

                </div>
            </div>
        @endforeach


    </div>
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
@endsection
