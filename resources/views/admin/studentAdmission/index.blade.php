@extends('layouts.admin')
@section('title')
    Student Admission
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\StudentAdmission::where('branch', $branch)->count('id') }}</div>
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
                                ₹ {{ \App\StudentAdmission::where('branch', $branch)->sum('course_fee_pay') }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa >fa fa-credit-card fa-2x"
                                style="
                                color:#4e980b;"></i>
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
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Pending
                                Amount
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                ₹ {{ \App\StudentAdmission::where('branch', $branch)->sum('course_pending') }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa >fa fa-credit-card fa-2x"
                                style="
                                color:#c40505;"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
        action="{{ route('admin.studentAdmission.index', $branch) }}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="search" placeholder="Search for name"
                aria-label="Search" aria-describedby="basic-addon2" value="{{ Request::get('search') }}">

            <select class="form-control border-2 small" name="course_id" aria-label="Search"
                aria-describedby="basic-addon2">
                <option value="" selected>No Option</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                @endforeach
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <br>
    <form class="pt-2 d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
        action="{{ route('admin.studentAdmission.monthsearch') }}" method="GET">
        @csrf
        <input type="hidden" name="branch" value="{{ $branch }}">
        <div class="input-group">
            <div class="input-group">
                <input type="month" class="form-control border-2 small" name="month" aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" formtarget="_blank" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <form class="pt-2 d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
        action="{{ route('admin.studentAdmission.datesearch') }}" method="GET">
        @csrf
        <input type="hidden" name="branch" value="{{ $branch }}">
        <div class="input-group">
            <div class="input-group">
                <input type="date" class="form-control border-2 small" name="date" aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" formtarget="_blank" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>


    <a class="btn button text-white" href="{{ route('admin.studentAdmission.create', $branch) }}"
        style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New
    </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Student Admission</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Student Name Info</th>
                            <th>Referral Code</th>
                            <th>Admission Date</th>
                            <th>Print Student Info</th>
                            <th>Course Name</th>
                            <th>Discount Amount</th>
                            <th>Course Price</th>
                            <th>Paid Amount</th>
                            <th>Pending Amount</th>
                            <th>Pay Transactions</th>
                            <th>Invoice</th>
                            <th>Add Pay</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">

                        @forelse($students as $student)
                            <tr>
                                <td>{{ $student->std_name }}<br>{{ $student->std_phone }}<br>{{ $student->std_email }}
                                    <br>{{ $student->std_state }}
                                </td>
                                <td>{{ $student->refer_code != null ? 'Refer Code - ' . $student->refer_code->refer_code : 'No Refer Code' }}
                                    <br> {{ $student->refer_code != null ? 'Amount - ₹' . $student->refer_discount : '' }}
                                </td>
                                
                                <td>{{ $student->admission_date}}</td>
                                <td><a target="_blank" href="{{ route('admin.student-admission.show', $student->id) }}"
                                        class="text-white btn btn-primary">Print</a></td>
                                <td>{{ $student->courses($student->course) }}</td>
                                <td>₹{{ $student->discount_amount }}</td>
                                <td>₹{{ $student->course_price }}</td>
                                <td>₹{{ $student->course_fee_pay }}</td>
                                <td>
                                    @if ($student->course_pending == 0)
                                        Payment Completed
                                    @else
                                        ₹{{ $student->course_pending }}
                                    @endif
                                </td>
                                <td>
                                    <a class="btn"
                                        href="{{ route('admin.studentAdmissionPay.show', $student->id) }}">View<i
                                            class="fa fa-eye"></i></a>
                                </td>
                                <td>
                                    <a target="__blank" class="btn btn-success"
                                        href="{{ route('admin.studentAdmission.invoice', $student->id) }}">View <i
                                            class="fa fa-eye"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.studentAdmissionPay.create', $student->id) }}"
                                        method="GET">
                                        <button type="submit" class="btn button btn-primary text-white">Add</button>
                                    </form>
                                </td>
                                <td><a class="btn button btn-success"
                                        href="{{ route('admin.studentAdmission.edit', $student->id) }}">Edit</a></td>
                                <td>
                                    <form action="{{ route('studentAdmission.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn button btn-danger text-white">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- {{$students->appends(Request::get('search'))->links()}} --}}
            </div>
        </div>
    </div>
@endsection
