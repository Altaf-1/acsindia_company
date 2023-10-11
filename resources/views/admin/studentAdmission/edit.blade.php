@extends('layouts.admin')
@section('title')
Student Admission Edit
@endsection
@section('links')
<link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection
@section('styles')
<style>
    .form-control {
        border-radius: 0;
    }

    .borderDiv {
        position: relative;
        border: 2px solid #cb910c;
        padding: 30px;
        margin: 20px;
    }

    .header {
        position: absolute;
        top: -14px;
        left: 1%;
        padding: 0% 2px;
        margin: 0%;
        background: white !important;
    }
</style>
@endsection
@section('content')

<div class="py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Student</h6>
</div>
<hr>
<div class="container emp-profile mt-3">
    <form action="{{route('admin.studentAdmission.update', $student->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group font-weight-bold col-sm-12 col-lg-3">
            <label for="branch">Branch:</label>
            <select name="branch" id="branch" class="form-control">
                @if($student->branch === 'dibrugarh')
                <option value="dibrugarh" selected>Dibrugarh</option>
                @else
                <option value="guwahati" selected>Guwahati</option>
                @endif
            </select>
        </div>
        <div class="borderDiv">
            <label class="header font-weight-bold bg-light">Student Information<span class="required">*</span></label>
            <div class="row bg-transparent">
                <div class="col-lg-4 p-2">
                    <label for="admission_no">Admission No</label>
                    <input type="text" class="form-control @error('admission_no') is-invalid @enderror" name="admission_no" placeholder="Admission No" value="{{$student->admission_no}}">
                    @error('current_street')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="roll_no">Roll No</label>
                    <input type="text" class="form-control @error('roll_no') is-invalid @enderror" name="roll_no" placeholder="Roll No" value="{{$student->roll_no}}">
                    @error('roll_no')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="class">Class</label>
                    <Select name="class" class="form-control">
                        <option value="{{$student->class}}" selected>{{$student->class}}</option>
                        <option value="class">Class</option>
                        <option value="class">Class</option>
                    </Select>
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_name">Student Name</label>
                    <input type="text" class="form-control @error('std_name') is-invalid @enderror" name="std_name" placeholder="Enter Student Name" value="{{$student->std_name}}">
                    @error('std_name')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_email">Email</label>
                    <input type="text" class="form-control @error('std_email') is-invalid @enderror" name="std_email" placeholder="Email" value="{{$student->std_email}}">
                    @error('std_email')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_phone">Phone Number</label>
                    <input type="text" class="form-control @error('std_phone') is-invalid @enderror" name="std_phone" placeholder="Enter Phone Number" value="{{$student->std_phone}}">
                    @error('std_phone')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_dob">DOB</label>
                    <input type="date" class="form-control @error('std_dob') is-invalid @enderror" name="std_dob" value="{{$student->std_dob}}">
                    @error('std_dob')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="roll_no">Gender</label>
                    <Select class="form-control">
                        <option value="" selected>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </Select>
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_state">State</label>
                    <select class="form-control" name="std_state">
                        <option value="{{$student->std_state}}" selected>{{$student->std_state}}</option>
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
                <div class="col-lg-4 p-2">
                    <label for="std_district">District</label>
                    <input type="text" class="form-control @error('std_district') is-invalid @enderror" name="std_district" value="{{$student->std_district}}">
                    @error('std_district')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_category">Category</label>
                    <input type="text" class="form-control @error('std_category') is-invalid @enderror" name="std_category" value="{{$student->std_category}}">
                    @error('std_category')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-12 p-2">
                    <label for="std_photo">Photo</label><br>
                    @if($student->std_photo !='')
                    <img src="{{asset('storage/'.$student->std_photo)}}" style="width: 200px;height: 200px;" alt="">
                    <br>
                    @endif

                    <input type="file" class="form-control @error('std_photo') is-invalid @enderror" name="std_photo">

                    @error('std_photo')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="admission_date">Admission Date</label>
                    <input type="date" class="form-control @error('admission_date') is-invalid @enderror" name="admission_date" value="{{$student->admission_date}}">
                    @error('admission_date')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="borderDiv">
            <label class="header font-weight-bold bg-light">Parents Details<span class="required">*</span></label>
            <div class="row bg-transparent">
                <div class="col-lg-4 p-2">
                    <label for="guardian_name">Parents Name</label>
                    <input type="text" class="form-control @error('guardian_name') is-invalid @enderror" name="guardian_name" placeholder="Admission No" value="{{$student->guardian_name}}">
                    @error('guardian_name')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="relation">Relation</label>
                    <input type="text" class="form-control @error('relation') is-invalid @enderror" name="relation" placeholder="relation " value="{{$student->relation}}">
                    @error('relation')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="guardian_phone">Phone No</label>
                    <input type="text" class="form-control @error('guardian_phone') is-invalid @enderror" name="guardian_phone" placeholder="Enter Student Name" value="{{$student->guardian_phone}}">
                    @error('guardian_phone')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="guardian_email">Email</label>
                    <input type="text" class="form-control @error('guardian_email') is-invalid @enderror" name="guardian_email" placeholder="Email" value="{{$student->guardian_email}}">
                    @error('guardian_email')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="borderDiv">
            <label class="header font-weight-bold bg-light">Payment Information<span class="required">*</span></label>
            <div class="row bg-transparent">
                <div class="col-lg-4 p-2">
                    <label for="roll_no">Course</label>
                    <Select id="course" class="form-control" onmousedown="this.value='';" onchange="getCourse(this.value);">
                        <option value="{{$student->course}}" selected>{{$student->courses($student->course)}}</option>
                        <hr>
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->course_name}}</option>
                        @endforeach
                    </Select>
                </div>
                <div class="col-lg-4 p-2">
                    <label for="course_price">Course Price</label>
                    <input id="course_price" type="number" class="form-control @error('course_price') is-invalid @enderror "
                           name="course_price" readonly value="{{$student->course_price}}">
                    @error('course_price')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-4 p-2">
                    <label for="course_price">Discount Amount</label>
                    <input id="discount_amount" onchange="getCourseDiscountAmount(this.value)"
                           type="number" class="form-control @error('discount_amount') is-invalid @enderror"
                           name="discount_amount" value="{{$student->discount_amount}}">
                    @error('discount_amount')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-4 p-2">
                    <label for="course_price">Course Discount Amount</label>
                    <input id="course_discount_amount" readonly type="number" class="form-control @error('course_discount_amount') is-invalid @enderror"
                           name="course_discount_amount" value="{{$student->course_price - $student->discount_amount}}">
                    @error('course_discount_amount')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-4 p-2">
                    <label for="course_fee_pay">Course Fee</label>
                    <input type="number" id="course_fee_pay"
                           class="form-control @error('course_fee_pay')
                    is-invalid @enderror" name="course_fee_pay"
                           onchange="getPending(this.value);" value="{{$student->course_fee_pay}}">
                    @error('course_fee_pay')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="course_pending">Course Pending Amount</label>
                    <input id="course_pending" type="number" class="form-control @error('course_pending') is-invalid @enderror" name="course_pending" readonly value="{{$student->course_pending}}">
                    @error('course_pending')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="pay_mode">Payment Mode</label>
                    <input id="pay_mode" type="text" class="form-control @error('pay_mode') is-invalid @enderror" name="pay_mode" value="{{$student->pay_mode}}">
                    @error('pay_mode')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Update</button>

    </form>
</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    function getCourse(course) {
        axios.get(`https://www.acsindiaias.com/api/getCourse/${course}`)
            .then(result => {
                // document.getElementById('course').value = result.data[0];
                document.getElementById('course_price').value = result.data;
                console.log(result.data);
            })
            .catch(err => {
                console.log(err);
            })
    }

    /**
     *
     * @param paidAmount Amount Paid by user
     */
    function getPending(paidAmount) {
        const courseDiscountPrice = document.getElementById('course_discount_amount').value;
        document.getElementById('course_pending').value = courseDiscountPrice - paidAmount;
    }

    function getCourseDiscountAmount(discountAmount){
        console.log(discountAmount);
        const coursePrice = document.getElementById('course_price').value;
        document.getElementById('course_discount_amount').value = coursePrice - discountAmount;
        const paidAmount = document.getElementById('course_fee_pay').value;
        getPending(paidAmount)
    }
</script>
@endsection
