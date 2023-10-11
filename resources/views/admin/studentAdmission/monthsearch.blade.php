@extends('layouts.main')
@section('title')
    Student Admission Invoice
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link href="{{asset('css/adminPanel.min.css')}}" rel="stylesheet">

@endsection
@section('styles')
    <style>
    td{
        padding:20px;
    }
 
    </style>
@endsection
@section('content')

<div class="container pt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-warning text-uppercase mb-1">{{$monthYear}}</div>
                            <div
                                class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa >fa fa-calendar fa-2x" style="
                                color:#ff7330;"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Students</div>
                            <div
                                class="h5 mb-0 font-weight-bold text-gray-800">{{$count}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa >fa fa-users fa-2x" style="
                                color:#ff7330;"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Paid Amount
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                ₹ {{$paid_fee}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa >fa fa-credit-card fa-2x" style="
                                color:#4e980b;"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Student Admission</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered p-0" id="dataTable" width="100%" cellspacing="0">
                
                    <tr>
                        <th>Student Name Info</th>
                        <th>Course Name</th>
                        <th>Course Price</th>
                        <th>Paid Amount | Date</th>
{{--                        <th>Pending Amount</th>--}}

                    </tr>
            
                    <tbody id="data">

                    @forelse($students as $student)
                      <div>
                            <tr>
                            <td>{{$student->std_name}}<br>{{$student->std_phone}}<br>{{$student->std_email}}
                                <br>{{$student->std_state}}</td>
                            <td>{{$student->courses($student->course)}}</td>
                            <td>₹ {{$student->course_price}}</td>
                            <td>
                                <!--{{$student->course_fee_pay}}-->
                               @foreach($student->getMonthlyPayment($monthYear,$student->id)  as $std)
                               <table>
                                   <tr>
                                       <td>₹ {{$std->add_pay}}</td>
                                       <td>{{$std->date}}</td>
                                   </tr>
                               </table>
                                @endforeach
                            
                            </td>
{{--                            <td>--}}
{{--                                @if($student->course_pending == 0)--}}
{{--                                    Payment Completed--}}
{{--                                @endif--}}
{{--                                {{$student->course_pending}}</td>--}}


                        </tr>
                      </div>
                    @empty
                        <tr>
                            <td colspan="10">No Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{--                {{$students->appends(Request::get('search'))->links()}}--}}
            </div>
        </div>
    </div>
</div>
    <style type="text/css" media="print">
        * {
            -webkit-print-color-adjust: exact !important; /*Chrome, Safari */
            color-adjust: exact !important; /*Firefox*/
        }
    </style>
    <script>
        window.onload = function invoice()
        {
            window.print();
        }
    </script>
@endsection
