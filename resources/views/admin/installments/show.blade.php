@extends('layouts.admin')
@section('title')
    Payment
@endsection
@section('content')
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


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow p-4" id="usersTable">
        @foreach($user_installments as $installment)
            <div class="col-lg-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Installment</div>
                                <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800 p-2">
                                    Name : <span class="h5 mb-0 text-gray-800">{{$installment->userName($installment->user_id)}}</span>
                                </div>
                                <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800 p-2">
                                    Course : <span class="h5 mb-0 text-gray-800">{{$installment->getCourseName($installment->course_id, $installment->unique_course_id, 'title')->result}}</span>
                                </div>
                                <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800 p-2">
                                    Amount Paid : ₹ <span class="h5 mb-0 text-gray-800"> {{$installment->amount_paid}}</span>
                                </div>
                                <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800 p-2">
                                    Date :  <span class="h5 mb-0 text-gray-800"> {{$installment->created_at->toDayDateTimeString()}}</span>
                                </div>
                                <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800 p-2">
                                    <i class="fas fa-file-invoice fa-2x" style="color:#fb78ff;">
                                        <button type="button" class="btn btn-primary" onclick="receiptModal{{explode("-", $installment->id)[4]}}()">View Receipt</button>
                                        <script>
                                            function receiptModal{{explode("-", $installment->id)[4]}}() {
                                                Swal.fire({
                                                    title: 'Receipt',
                                                    imageUrl: '{{asset('storage/'.$installment->receipt_image)}}',
                                                    imageWidth: 400,
                                                    imageHeight: 600,
                                                    showConfirmButton:false
                                                })
                                            }
                                        </script>
                                    </i>
                                </div>
                                @if($installment->status == 0)
                                <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">
                                    <form action="{{route('admin.payment-installments.add-amount')}}" method="POST">
                                        @csrf
                                        <div class="input-group">
                                            <input type="hidden" name="id" value="{{$installment->id}}">
                                            <input type="number" name="amount" class="form-control w-25 mr-2 rounded-lg" placeholder="enter the amount" autofocus>
                                            <button class="btn btn-primary" type="submit">
                                                Add / Edit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                @endif
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @if($user_installments[0]->status == 0)
        <div>
            @if(!$user_installments[0]->isEnrolled($user_installments[0]->user_id, $user_installments[0]->unique_course_id, $user_installments[0]->course_id))

            <a class="btn btn-primary"
               href="{{route('admin.payment-installments.allow', $user_installments[0]->id)}}">
                Allow Course
            </a>
            @endif

            <a class="btn btn-primary"
               href="{{route('admin.payment-installments.create-invoice', $user_installments[0]->id)}}">
                Generate invoice
            </a>
        </div>
        @endif

            <div class="container p-4 border mt-2 shadow-lg">
                @include('partials.errors')
                <form action="{{route('admin.payment-installments.store-installment')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{\App\User::findOrFail($user_installments[0]->user_id)->name}}"
                               name="name"
                               aria-describedby="emailHelp" placeholder="Enter name">
                    </div>

                    <input type="hidden" name="user_id" value="{{$user_installments[0]->user_id}}">

                    <div class="form-group">
                        <label for="course_id">Course</label>
                        <select name="course_id" class="form-control mr-4">
                            <option value="{{$user_installments[0]->unique_course_id}}" selected>{{$installment->getCourseName($installment->course_id, $installment->unique_course_id, 'title')->result}}</option>
                        </select>
                    </div>

                    <input type="hidden" value="{{$user_installments[0]->course_id}}" name="course_type_id">


                    <div class="form-group">
                        <label for="name">Payment Gateway</label>
                        <select name="payment_type" class="form-control mr-4" required>
                            <option value="Bank Transfer">Installments</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="receipt">Example file input</label>
                        <input type="file" class="form-control-file" name="receipt">
                    </div>

                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </form>
            </div>

@endsection
