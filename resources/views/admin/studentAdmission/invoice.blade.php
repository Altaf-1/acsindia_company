@extends('layouts.main')
@section('title')
{{$student->std_name}} Admission Invoice {{$student->created_at->format('d/m/Y')}}
@endsection
@section('links')

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- main css -->
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/invoice.css')}}">


@endsection


@section('styles')
<style>
.fa {
    color: #fb770c;
     !important;
}

h5 {
    margin-bottom: 0;
    padding: 1px;
    padding-left: 4px;
}

td {
    padding: 0;
}
</style>
@endsection

@section('content')

@if ($message = Session::get('success'))
<script>
Swal.fire({
    position: 'center',
    icon: 'info',
    title: '{{$message}}',
    showConfirmButton: true,
})
</script>
@endif
<!--navbar-->
<section id="header" style="background-image: url({{asset('comimages/bk3.webp')}});">
    <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
</section>

<table border class="invoice w-75">
    <!--heading-->
    <tr>
        <td>
            <div class="row header">
                <div class="col-sm-3 d-flex">
                    <img class="header-img" src="{{asset('comimages/apsc-logo.jpeg')}}" alt="">
                </div>
                <div class="col-sm-6">
                    <h4 class="header-main">ACADEMY OF CIVIL SERVICES <br>DIBRUGARH, 786001 <br>9085268769<br>
                        GSTIN: 18ABLFA1515G1ZO</h4>
                </div>
                <div class="col-sm-3">
                    <h5 class="header-main">SL.NO : {{$student->admission_no}}</h5>
                    <h5 class="header-main">Date : {{$student->created_at->format('d/m/Y')}}</h5>
                </div>
            </div>
        </td>
    </tr>


    <!--gst invoice-->
    <tr>
        <td>
            <div class="header" style="background-color : #b0d4f1">
                <h4 class="header-main">GST INVOICE</h4>
            </div>
        </td>
    </tr>
</table>

<table border class="invoice w-75">
    <!--supplier and user details-->
    <tr>
        <td class="w-50">
            <div>
                <h4 class="header-main">User Details</h4>
            </div>
        </td>
        <td class="w-50">
            <div>
                <h4 class="header-main">Supplier Details</h4>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50 align-baseline">
            <div>
                <h4>Name : {{$student->std_name}}</h4>
            </div>
        </td>
        <td class="w-50">
            <div>
                <h4>Name: Academy of civil services</h4>
            </div>
        </td>
    </tr>

    <tr>
        <td class="w-50">
            <div>
                <h4>Payment Mode : {{$student->pay_mode}}</h4>
            </div>
        </td>
        <td class="w-50">
            <div>
                <h4>GSTIN: 18ABLFA1515G1ZO</h4>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50">
            <div>
                <h4>State : {{$student->std_state}}</h4>
            </div>
        </td>
        <td class="w-50">
            <div>
                <h4>State: Assam</h4>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50">
            <div>
                <h4>Address : {{$student->std_district}}</h4>
            </div>
        </td>
        <td class="w-50">
            <div>
                <h4>Address: Naliapool, Dibrugarh</h4>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50 p-3" colspan="2">
            <div>
                <h4 class="header-main"></h4>
            </div>
        </td>
    </tr>
</table>

<table border class="invoice w-75">
    <tr>
        <td colspan="2" rowspan="2">
            <h5 class="header-main">Course Details</h5>
        </td>
        <td rowspan="2">
            <h5 class="header-main">Date</h5>
        </td>
        <td rowspan="2">
            <h5 class="header-main">Mode</h5>
        </td>
        <td rowspan="2">
            <h5 class="header-main">Taxable Value</h5>
        </td>
        <td colspan="2">
            <h5 class="header-main">CGST</h5>
        </td>
        <td colspan="2">
            <h5 class="header-main">SGST</h5>
        </td>
        <td rowspan="2">
            <h5 class="header-main">Total Amount Paid</h5>
        </td>
    </tr>
    <tr>
        <td>
            <h5 class="header-main">Rate</h5>
        </td>
        <td>
            <h5 class="header-main">Amount</h5>
        </td>
        <td>
            <h5 class="header-main">Rate</h5>
        </td>
        <td>
            <h5 class="header-main">Amount</h5>
        </td>
    </tr>
    @if($student->discount_amount != 0)
    <tr>
        <td colspan=9">
            <h5 class="d-flex justify-content-start">{{$student->class}} (Original Amount)</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">{{($student->course_price + $student->discount_amount)}}</h5>
        </td>
    </tr>
    <tr>
        <td colspan="9">
            <h5 class="header-main d-flex justify-content-end">Discount</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">{{$student->discount_amount}}</h5>
        </td>
    </tr>
    @endif
    @if($student->refer_discount != 0)
    <tr>
        <td colspan="9">
            <h5 class="header-main d-flex justify-content-end">
                Refer Code {{$student->refer_code->refer_code}} Discount</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">{{$student->refer_discount}}</h5>
        </td>
    </tr>
    @endif
    <tr>
        <td colspan="2">
            <h5 class="d-flex justify-content-end">{{$student->class}} (Discount Amount) </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end"></h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end"></h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                {{number_format((float)(($student->course_price/118) * 100), 0, '.', '')}}
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">{{9}}%</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                {{number_format((float)((number_format((float)(($student->course_price/118) * 100), 0, '.', '')) * (9/100)),0,'.','')}}
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">{{9}}%</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                {{number_format((float)((number_format((float)(($student->course_price/118) * 100), 0, '.', '')) * (9/100)),0,'.','')}}
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">{{($student->course_price)}}</h5>
        </td>
    </tr>


    <!--Transaction amount-->
    @foreach($pays as $pay)
    <tr>
        <td colspan="2">
            <h5 class="d-flex justify-content-end"></h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end ">{{\Carbon\Carbon::parse($pay->date)->format('d-M-Y')}}</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end ">{{$pay->mode}}</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end ">{{number_format((float)(($pay->add_pay/118) * 100), 0, '.', '')}}
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">9%</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                {{number_format((float)((number_format((float)(($pay->add_pay/118) * 100), 0, '.', '')) * (9/100)),0,'.','')}}
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">9%</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                {{number_format((float)((number_format((float)(($pay->add_pay/118) * 100), 0, '.', '')) * (9/100)),0,'.','')}}
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end ">{{$pay->add_pay}}</h5>
        </td>
    </tr>
    @endforeach
    <tr>
        <td colspan="10" style="background-color : #b0d4f1; height: 20px">
            <h5 class="d-flex justify-content-end"></h5>
        </td>
        {{--            <td><h5 class="d-flex justify-content-end "></h5></td>--}}
        {{--            <td><h5 class="d-flex justify-content-end "></h5></td>--}}
        {{--            <td><h5 class="d-flex justify-content-end"></h5></td>--}}
        {{--            <td><h5 class="d-flex justify-content-end"></h5></td>--}}
        {{--            <td><h5 class="d-flex justify-content-end"></h5></td>--}}
        {{--            <td><h5 class="d-flex justify-content-end"></h5></td>--}}
        {{--            <td><h5 class="d-flex justify-content-end "></h5></td>--}}
    </tr>
    <tr>
        <td colspan="4">
            <h5 class="header-main m-0">Pending Amount</h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                {{number_format((float)(($student->course_pending/118) * 100), 0, '.', '')}}
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                9%
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                {{number_format((float)((number_format((float)(($student->course_pending/118) * 100), 0, '.', '')) * (9/100)),0,'.','')}}
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                9%
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">
                {{number_format((float)((number_format((float)(($student->course_pending/118) * 100), 0, '.', '')) * (9/100)),0,'.','')}}
            </h5>
        </td>
        </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-end">{{($student->course_pending)}}</h5>
        </td>
    </tr>
    <tr>
        <td colspan="10">
            <input type="hidden" id="amount_value" value="{{($student->course_price)}}">
            <h5 class="header-main p-5 text-uppercase" id="amount">
            </h5>
        </td>
    </tr>
    <tr>
        <td colspan="10">
            <h5 class="header-main p-2"></h5>
        </td>
    </tr>
    <tr>
        <td colspan="2" rowspan="7">
            <img class="p-4" style="width:450px;height:250px" src="{{asset('img/sign.jpg')}}">
        </td>
        <td colspan="3" rowspan="7">
            <img class="p-4" style="width:auto;height:250px" src="{{asset('img/seal.jpg')}}">
        </td>
        <td colspan="4">
            <h5 class="header-main text-left">
                Total Amount before Tax
                <!--<br>Add: CGST-->
                <!--<br>Add: SGST-->
                <!--<br>Total Tax Amount(GST)-->
                <!--<br>Total Amount After Tax-->
                <!--<br>Total Amount Paid-->
                <!--<br>Pending-->
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-center">
                {{number_format((float)(($student->course_price/118) * 100), 0, '.', '')}}
            </h5>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <h5 class="header-main text-left">
                Add: CGST

            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-center">

                {{number_format((float)((number_format((float)(($student->course_price/118) * 100), 0, '.', '')) * (9/100)),0,'.','')}}
            </h5>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <h5 class="header-main text-left">
                Add: SGST

            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-center">

                {{number_format((float)((number_format((float)(($student->course_price/118) * 100), 0, '.', '')) * (9/100)),0,'.','')}}
            </h5>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <h5 class="header-main text-left">
                Total Tax Amount(GST)

            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-center">
                {{number_format((float)((number_format((float)(($student->course_price/118) * 100), 0, '.', '')) * (9/100)),0,'.','') * 2}}
            </h5>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <h5 class="header-main text-left">
                Total Amount After Tax

            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-center">
                {{$student->course_price}}
            </h5>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <h5 class="header-main text-left">
                Total Amount Paid

            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-center">
                {{$student->course_fee_pay}}
            </h5>
        </td>
    </tr>

    <tr>
        <td colspan="4">
            <h5 class="header-main text-left">
                Pending
            </h5>
        </td>
        <td>
            <h5 class="d-flex justify-content-center">

                {{$student->course_pending}}
            </h5>
        </td>
    </tr>
    <tr>
        <td colspan="10">
            <div class="row invoice invoice-footer">
                <div class="col-sm-12 text-center">
                    WWW.ACSINDIAIAS.COM
                </div>
            </div>
        </td>
    </tr>
    <!-- <tr>
            <td colspan="10">
                <div class="row invoice">
                    <div class="col-sm-12 text-center font-weight-bolder" style="background-color: red; color: #0b0b0b">
                        Note : To avail the early bird discount of Rs 10000, please pay the full amount before 15th June 2022.
                    </div>
                </div>
            </td>
        </tr> -->

</table>



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
<script>
var amount = document.getElementById('amount_value').value;

const arr = x => Array.from(x);
const num = x => Number(x) || 0;
const str = x => String(x);
const isEmpty = xs => xs.length === 0;
const take = n => xs => xs.slice(0, n);
const drop = n => xs => xs.slice(n);
const reverse = xs => xs.slice(0).reverse();
const comp = f => g => x => f(g(x));
const not = x => !x;
const chunk = n => xs =>
    isEmpty(xs) ? [] : [take(n)(xs), ...chunk(n)(drop(n)(xs))];

// numToWords :: (Number a, String a) => a -> String
let numToWords = n => {

    let a = [
        '', 'one', 'two', 'three', 'four',
        'five', 'six', 'seven', 'eight', 'nine',
        'ten', 'eleven', 'twelve', 'thirteen', 'fourteen',
        'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    ];

    let b = [
        '', '', 'twenty', 'thirty', 'forty',
        'fifty', 'sixty', 'seventy', 'eighty', 'ninety'
    ];

    let g = [
        '', 'thousand', 'million', 'billion', 'trillion', 'quadrillion',
        'quintillion', 'sextillion', 'septillion', 'octillion', 'nonillion'
    ];

    let makeGroup = ([ones, tens, huns]) => {
        return [
            num(huns) === 0 ? '' : a[huns] + ' hundred ',
            num(ones) === 0 ? b[tens] : b[tens] && b[tens] + '-' || '',
            a[tens + ones] || a[ones]
        ].join('');
    };

    let thousand = (group, i) => group === '' ? group : `${group} ${g[i]}`;

    if (typeof n === 'number')
        return numToWords(String(n));
    else if (n === '0')
        return 'zero';
    else
        return comp(chunk(3))(reverse)(arr(n))
            .map(makeGroup)
            .map(thousand)
            .filter(comp(not)(isEmpty))
            .reverse()
            .join(' ');
};

document.getElementById("amount").innerHTML = numToWords(amount);
</script>
<style type="text/css" media="print">
* {
    -webkit-print-color-adjust: exact !important;
    /*Chrome, Safari */
    color-adjust: exact !important;
    /*Firefox*/
}
</style>
<script>
window.onload = function invoice() {
    window.print();
}
</script>
@endsection