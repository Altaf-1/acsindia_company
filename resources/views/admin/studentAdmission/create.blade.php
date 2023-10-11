@extends('layouts.admin')
@section('title')
Student Admission Create
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
    <h6 class="m-0 font-weight-bold text-primary">Create Student Admission</h6>
</div>
<hr>
<div class="container emp-profile mt-3">
    <form action="{{route('admin.studentAdmission.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group font-weight-bold col-sm-12 col-lg-3">
            <label for="branch">Branch:</label>
            <select name="branch" id="branch" class="form-control">
                @if($branch === 'dibrugarh')
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
                    <label for="admission_no">Admission No</label><sup class="text-danger">*</sup>
                    <input type="text" class="form-control @error('admission_no') is-invalid @enderror" name="admission_no" placeholder="Admission No" value="{{old('admission_no')}}">
                    @error('current_street')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="roll_no">Roll No</label><sup class="text-danger">*</sup>
                    <input type="text" class="form-control @error('roll_no') is-invalid @enderror" name="roll_no" placeholder="Roll No" value="{{old('roll_no')}}">
                    @error('roll_no')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="roll_no">Course Name</label><sup class="text-danger">*</sup>
                    <Select name="class" class="form-control" required>
                        <option value="" selected>Select Class</option>
                        @foreach($courses as $course)
                            <option value="{{ $course->course_name }}"
                                {{ old('class') == $course->course_name ? 'selected' : '' }}>
                                {{ $course->course_name }}
                            </option>
                        @endforeach
                    </Select>
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_name">Student Name</label><sup class="text-danger">*</sup>
                    <input type="text" class="form-control @error('std_name') is-invalid @enderror" name="std_name" placeholder="Enter Student Name" value="{{old('std_name')}}">
                    @error('std_name')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_email">Email</label><sup class="text-danger">*</sup>
                    <input type="text" class="form-control @error('std_email') is-invalid @enderror" name="std_email" placeholder="Email" value="{{old('std_email')}}">
                    @error('std_email')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_phone">Phone Number</label>
                    <input type="text" class="form-control @error('std_phone') is-invalid @enderror" name="std_phone" placeholder="Enter Phone Number" value="{{old('std_phone')}}">
                    @error('std_phone')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_dob">DOB</label><sup class="text-danger">*</sup>
                    <input type="date" class="form-control @error('std_dob') is-invalid @enderror" name="std_dob" value="{{old('std_dob')}}">
                    @error('std_dob')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="roll_no">Gender</label><sup class="text-danger">*</sup>
                    <Select name="std_gender" class="form-control" required>
                        <option value="" selected>Select</option>
                        <option value="male" {{ old('std_gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('std_gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </Select>
                </div>
                <div class="col-lg-4 p-2">
                    @php
                        $states = [
                            "Andhra Pradesh",
                            "Andaman and Nicobar Islands",
                            "Arunachal Pradesh",
                            "Assam",
                            "Bihar",
                            "Chandigarh",
                            "Chhattisgarh",
                            "Dadar and Nagar Haveli",
                            "Daman and Diu",
                            "Delhi",
                            "Lakshadweep",
                            "Puducherry",
                            "Goa",
                            "Gujarat",
                            "Haryana",
                            "Himachal Pradesh",
                            "Jammu and Kashmir",
                            "Jharkhand",
                            "Karnataka",
                            "Kerala",
                            "Madhya Pradesh",
                            "Maharashtra",
                            "Manipur",
                            "Meghalaya",
                            "Mizoram",
                            "Nagaland",
                            "Odisha",
                            "Punjab",
                            "Rajasthan",
                            "Sikkim",
                            "Tamil Nadu",
                            "Telangana",
                            "Tripura",
                            "Uttar Pradesh",
                            "Uttarakhand",
                            "West Bengal"
                        ];
                    @endphp

                    <label for="std_state" class="form-label">State</label><sup class="text-danger">*</sup>

                    <select class="form-control" name="std_state" required>
                        <option value="" selected>Select State</option>
                        @foreach ($states as $state)
                            <option value="{{ $state }}" {{ old('std_state') == $state ? 'selected' : '' }}>
                                {{ $state }}
                            </option>
                        @endforeach
                    </select>

                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_district">District</label><sup class="text-danger">*</sup>
                    <input type="text" class="form-control @error('std_district') is-invalid @enderror" name="std_district" value="{{old('std_district')}}">
                    @error('std_district')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_category">Category</label><sup class="text-danger">*</sup>
                    <select name="std_category" class="form-control">
                        <option value="">SELECT</option>
                        <option value="GENERAL" {{ old('std_category') == 'GENERAL' ? 'selected' : '' }}>GENERAL</option>
                        <option value="OBC"
                            {{ old('std_category') == 'OBC' ? 'selected' : '' }}>
                            OBC</option>
                        <option value="SC"
                            {{ old('std_category') == 'SC' ? 'selected' : '' }}>
                            SC</option>
                        <option value="ST"
                            {{ old('std_category') == 'ST' ? 'selected' : '' }}>
                            ST</option>
                        <option value="UR"
                            {{ old('std_category') == 'UR' ? 'selected' : '' }}>
                            UR</option>
                        <option value="OTHERS"
                            {{ old('std_category') == 'OTHERS' ? 'selected' : '' }}>
                            OTHERS</option>
                    </select>
                    @error('std_category')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="std_photo">Student Photo</label>
                    <input type="file" class="form-control @error('std_photo') is-invalid @enderror" name="std_photo">
                    @error('std_photo')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="admission_date">Admission Date</label><sup class="text-danger">*</sup>
                    <input type="date" class="form-control @error('admission_date') is-invalid @enderror" name="admission_date" value="{{old('admission_date')}}">
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
                    <label for="guardian_name">Parents Name</label><sup class="text-danger">*</sup>
                    <input type="text"
                           class="form-control @error('guardian_name') is-invalid @enderror"
                           name="guardian_name" placeholder="Guardian Name" value="{{old('guardian_name')}}">
                    @error('guardian_name')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="relation">Relation</label><sup class="text-danger">*</sup>
                    <input type="text" class="form-control @error('relation') is-invalid @enderror" name="relation" placeholder="relation " value="{{old('relation')}}">
                    @error('relation')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="guardian_phone">Phone No</label><sup class="text-danger">*</sup>
                    <input type="text" class="form-control @error('guardian_phone') is-invalid @enderror"
                           name="guardian_phone" placeholder="Enter Guardian Phone No." value="{{old('guardian_phone')}}">
                    @error('guardian_phone')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="guardian_email">Email</label>
                    <input type="text" class="form-control @error('guardian_email') is-invalid @enderror" name="guardian_email" placeholder="Email" value="{{old('guardian_email')}}">
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
                    <label for="roll_no">Course Name</label>
                    <Select name="course" required id="course" class="form-control" onmousedown="this.value='';" onchange="getCourse(this.value);">
                        <option value="" selected>Select</option>
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->course_name}}</option>
                        @endforeach
                    </Select>
                </div>
                <div class="col-lg-4 p-2">
                    <label for="course_price">Course Price</label>
                    <input id="course_price" type="number" class="form-control @error('course_price') is-invalid @enderror" name="course_price" readonly>
                    @error('course_price')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-4 p-2">
                    <label for="course_price">Discount Amount</label>
                    <input id="discount_amount"
                           onchange="getCourseDiscountAmount()"
                           type="number" class="form-control @error('discount_amount') is-invalid @enderror"
                           name="discount_amount">
                    @error('discount_amount')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>


                <div class="col-lg-4 p-2">
                    <label for="refer_code">Referral Code</label>
                    <input type="text" id="refer_code" class="form-control @error('refer_code') is-invalid
                     @enderror" name="refer_code">
                    @error('refer_code')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-4 p-2">
                    <label for="refer_discount">Refer Code Discount</label>
                    <input id="refer_discount" type="number" class="form-control
                     @error('refer_discount') is-invalid @enderror"
                           onchange="getCourseDiscountAmount()"
                           name="refer_discount">
                    @error('refer_discount')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-4 p-2">
                    <label for="course_price">Course Discount Amount</label>
                    <input id="course_discount_amount" readonly type="number" class="form-control @error('course_discount_amount') is-invalid @enderror" name="course_discount_amount">
                    @error('course_discount_amount')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="col-lg-4 p-2">
                    <label for="course_fee_pay">Paid Fee</label>
                    <input type="number" id="course_fee_pay"
                           class="form-control @error('course_fee_pay') is-invalid @enderror"
                           name="course_fee_pay" onchange="getPending(this.value);" required>
                    @error('course_fee_pay')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>


                <div class="col-lg-4 p-2">
                    <label for="course_pending">Course Pending Amount</label>
                    <input id="course_pending" type="number" class="form-control
                     @error('course_pending') is-invalid @enderror"
                           name="course_pending" readonly>
                    @error('course_pending')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 p-2">
                    <label for="pay_mode">Payment Mode</label>
                    <input id="pay_mode" type="text" class="form-control @error('pay_mode') is-invalid @enderror" name="pay_mode">
                    @error('pay_mode')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">SAVE</button>

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

    function getCourseDiscountAmount(){
        const coursePrice = document.getElementById('course_price').value || 0;
        const discountAmount = document.getElementById('discount_amount').value || 0;
        const referDiscount = document.getElementById('refer_discount').value || 0;
        const courseDiscount = parseInt(discountAmount) + parseInt(referDiscount);
        document.getElementById('course_discount_amount').value = parseInt(coursePrice) - courseDiscount;
        const paidAmount = document.getElementById('course_fee_pay').value;
        getPending(paidAmount)
    }
</script>
@endsection
