@extends('layouts.main')
@section('title')
    ACS Invoice
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
        }

        td{
            padding: 0;
        }
        .invoice{
    margin: auto;
}

.full-border-top{
    border-top: 5px solid black;
}

.full-border-bottom{
    border-top: 5px solid black;
}



.header{
    color: black;
    font-weight: bolder;
    text-transform: uppercase;
    padding-top: 30px;
    padding-bottom: 30px;
}

.header-main {

    font-weight: bolder;
    text-align: center;
}

.header-sub{
    color: orange;

}

.header-img{
    padding: 10px;
    width: 50%;
}

.auth-img{
    width: 100%;
    height: 20%;
    padding-right: 10%;
    padding-left: 10%;
}


.invoice-sub{
    padding: 50px;
    color: #020a45;
    font-size: 20px;
    background-color: white;
}

.invoice-line{
    height: 5px;
    background-color: orange;
}

.invoice-payment{
    padding: 50px;
    color: #020a45;
}

.invoice-info{
    padding: 50px;
    color: #020a45;
    font-weight: bolder;
}


.invoice-total{
    padding: 50px 130px 50px 50px;
    color: #020a45;
}

.invoice-total-content{
    margin-left: 930px;
}

.invoice-footer{
    background-color: orange;
    padding: 20px;
    color: white;
    font-weight: bold;
    font-size: 20px;
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
                        <h5 class="header-main">SL.NO : {{$invoice->invoice_id}}</h5>
                        <h5 class="header-main">Date : {{$invoice->created_at->format('d/m/Y')}}</h5>
                    </div>
                </div>
            </td>
        </tr>

        <!--invoice id-->
        <tr>
            <td class="p-1">
                <div class="row header-main">
                    <div class="col-sm-12">
                        <h4 class="header-main">ID : {{$invoice->payment_id}}</h4>
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

    <!-- user and supplier details-->
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
                    <h4>Name : {{\App\User::find($invoice->user_id)->name}}</h4>
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
                    <h4>Payment Mode : {{$invoice->mode}}</h4>
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
                    <h4>State: {{\App\User::find($invoice->user_id)->state}}</h4>
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
                    <h4>Address : {{\App\User::find($invoice->user_id)->postal}}</h4>
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
            <td colspan="2" rowspan="2"><h5 class="header-main">Course Details</h5></td>
            <td rowspan="2"><h5 class="header-main">Quantity</h5></td>
            <td rowspan="2"><h5 class="header-main">Taxable Value</h5></td>
            @if(\App\User::find($invoice->user_id)->state === 'Assam')
                <td colspan="2"><h5 class="header-main">CGST</h5></td>
                <td colspan="2"><h5 class="header-main">SGST</h5></td>
            @else
                <td colspan="4"><h5 class="header-main">IGST</h5></td>
            @endif
            <td rowspan="2"><h5 class="header-main">Total Amount Paid</h5></td>
        </tr>
        <tr>
            @if(\App\User::find($invoice->user_id)->state === 'Assam')
                <td><h5 class="header-main">Rate</h5></td>
                <td><h5 class="header-main">Amount</h5></td>
                <td><h5 class="header-main">Rate</h5></td>
                <td><h5 class="header-main">Amount</h5></td>
            @else
                <td colspan="2"><h5 class="header-main">Rate</h5></td>
                <td colspan="2"><h5 class="header-main">Amount</h5></td>
            @endif
        </tr>

        <!-- Main course Row -->
        <tr>
            <td colspan="2"><h5 class="d-flex justify-content-end">{{$invoice->course}}</h5></td>
            <td><h5 class="d-flex justify-content-end">1</h5></td>
            <td><h5 class="d-flex justify-content-end">
                        @php
                            $courseDetails = \App\Invoice::getCourseDetails($invoice->course);
                            $upscCourseId = \App\Course::where("title", $invoice->course)->first();
                            $apscCourseId = \App\ApscCourses::where("title", $invoice->course)->first();
                            $addition = 0;
                             if ($upscCourseId && \App\UserExtraMaterial::check_material_exists(1, $upscCourseId->id, 1, $invoice->user_id))
                                $addition += 2000;

                             if ($apscCourseId && \App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 1, $invoice->user_id))
                                $addition += 2000;

                             if ($apscCourseId && \App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 2, $invoice->user_id))
                                $addition += 2000;

                             $totalInvoiceAmount = $invoice->amount - $addition;
                        @endphp

                        @if($courseDetails->is_gst)
                            {{round((($totalInvoiceAmount) / (100 + $invoice->sgst + $invoice->cgst)) * 100)}}
                        @else
                            {{$totalInvoiceAmount}}
                        @endif



                </h5></td>
            @if(\App\User::find($invoice->user_id)->state === 'Assam')
                <td><h5 class="d-flex justify-content-end">
                        @if($courseDetails->is_gst)
                            {{$invoice->cgst}}%
                        @else
                            0
                        @endif
                    </h5></td>
                <td><h5 class="d-flex justify-content-end">
                        @if($courseDetails->is_gst)
                            {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))) / 2)}}
                        @else
                            0
                        @endif
                    </h5></td>
                <td><h5 class="d-flex justify-content-end">
                        @if($courseDetails->is_gst)
                            {{$invoice->sgst}}%
                        @else
                            0
                        @endif
                    </h5></td>
                <td><h5 class="d-flex justify-content-end">
                        @if($courseDetails->is_gst)
                            {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))) / 2)}}
                        @else
                            0
                        @endif
                    </h5></td>
            @else
                <td colspan="2"><h5 class="d-flex justify-content-end">{{$invoice->sgst + $invoice->cgst}}%</h5></td>
                <td colspan="2"><h5 class="d-flex justify-content-end">
                        @if($courseDetails->is_gst)
                            {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100))))) }}
                        @else
                            0
                        @endif
                    </h5></td>
            @endif
            <td>
                <h5 class="d-flex justify-content-end">
                    {{$totalInvoiceAmount}}
                </h5></td>
        </tr>
        <!-- End of Main course Row -->

        <!-- UPSC book Row -->
        <tr>
            <td colspan="2"><h5 class="d-flex justify-content-end">
                    @php
                        $upscCourseId = \App\Course::where("title", $invoice->course)->first();
                        $apscCourseId = \App\ApscCourses::where("title", $invoice->course)->first();
                    @endphp
                    @if ($upscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(1, $upscCourseId->id, 1, $invoice->user_id) ? 'UPSC Book' : ''}}
                    @endif
                    @if ($apscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 1, $invoice->user_id) ? 'UPSC Book' : ''}}
                    @endif
                </h5>
            </td>
            <td><h5 class="d-flex justify-content-end ">

                    @if ($upscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(1, $upscCourseId->id, 1, $invoice->user_id) ? '1' : ''}}
                    @endif
                    @if ($apscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 1, $invoice->user_id) ? '1' : ''}}
                    @endif

                </h5></td>
            <td><h5 class="d-flex justify-content-end ">

                    @if ($upscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(1, $upscCourseId->id, 1, $invoice->user_id) ? '2000' : ''}}
                    @endif
                    @if ($apscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 1, $invoice->user_id) ? '2000' : ''}}
                    @endif
                </h5></td>
            @if(\App\User::find($invoice->user_id)->state === 'Assam')
                <td><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end">0</h5></td>
                <td><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end">0</h5></td>
            @else
                <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
                <td colspan="2"><h5 class="d-flex justify-content-end">0</h5></td>
            @endif
            <td><h5 class="d-flex justify-content-end ">
                    @if ($upscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(1, $upscCourseId->id, 1, $invoice->user_id) ? '2000' : ''}}
                    @endif
                    @if ($apscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 1, $invoice->user_id) ? '2000' : ''}}
                    @endif
                </h5></td>
        </tr>
        <!-- End of UPSC book Row -->

        <!-- APSC book Row -->
        <tr>
            <td colspan="2"><h5 class="d-flex justify-content-end">

                    @php
                        $apscCourseId = \App\ApscCourses::where("title", $invoice->course)->first();
                    @endphp
                    @if ($apscCourseId)
                        {{\App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 2, $invoice->user_id) ? 'APSC Book' : ''}}
                    @endif

                </h5></td>
            <td><h5 class="d-flex justify-content-end ">

                        @if ($apscCourseId)
                            {{\App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 2, $invoice->user_id) ? '1' : ''}}
                        @endif
                </h5></td>
            <td><h5 class="d-flex justify-content-end ">

                        @if ($apscCourseId)
                            {{\App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 2, $invoice->user_id) ? '2000' : ''}}
                        @endif

                </h5></td>
            @if(\App\User::find($invoice->user_id)->state === 'Assam')
                <td><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end">0</h5></td>
                <td><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end">0</h5></td>
            @else
                <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
                <td colspan="2"><h5 class="d-flex justify-content-end">0</h5></td>
            @endif
            <td><h5 class="d-flex justify-content-end ">
                        @if ($apscCourseId)
                            {{\App\UserExtraMaterial::check_material_exists(2, $apscCourseId->id, 2, $invoice->user_id) ? '2000' : ''}}
                        @endif
                </h5></td>
        </tr>
        <!-- End of APSC book Row -->

        <!-- Black Row -->
        <tr>
            <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
            <td><h5 class="d-flex justify-content-end "></h5></td>
            <td><h5 class="d-flex justify-content-end "></h5></td>
            @if(\App\User::find($invoice->user_id)->state === 'Assam')
                <td><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end">0</h5></td>
                <td><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end">0</h5></td>
            @else
                <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
                <td colspan="2"><h5 class="d-flex justify-content-end">0</h5></td>
            @endif
            <td><h5 class="d-flex justify-content-end ">0</h5></td>
        </tr>
        <!-- End of Black Row -->


        <!-- Total Row -->
        <tr>
            <td colspan="3"><h5 class="header-main m-0" style="background-color : #b0d4f1">Total</h5></td>
            <td><h5 class="d-flex justify-content-end">
                @if($courseDetails->is_gst)
                    {{round((($totalInvoiceAmount ) / (100 + $invoice->sgst + $invoice->cgst)) * 100) + $addition}}
                @else
                    {{$totalInvoiceAmount}}
                @endif
            </td>
            @if(\App\User::find($invoice->user_id)->state === 'Assam')
                <td><h5 class="d-flex justify-content-end">

                    </h5></td>
                <td><h5 class="d-flex justify-content-end">
                        @if($courseDetails->is_gst)
                            {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))) / 2)}}
                        @else
                            0
                        @endif
                    </h5></td>
                <td><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end">
                        @if($courseDetails->is_gst)
                            {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))) / 2)}}
                        @else
                            0
                        @endif
                    </h5></td>
            @else
                <td colspan="2"><h5 class="d-flex justify-content-end">
                        {{$invoice->sgst + $invoice->cgst}}%
                    </h5></td>
                <td colspan="2"><h5 class="d-flex justify-content-end">
                        @if($courseDetails->is_gst)
                            {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))))}}
                        @else
                            0
                        @endif
                    </h5></td>
            @endif
            <td><h5 class="d-flex justify-content-end">
                    {{$invoice->amount}}
                </h5></td>
        </tr>
        <!-- End of Total Row -->



        <!-- Amount in Words Row -->
        <tr>
            <td colspan="9">
                <input type="hidden" id="amount_value" value="{{$totalInvoiceAmount}}">
                <h5 class="header-main p-5 text-uppercase" id="amount">
                </h5>
            </td>
        </tr>
        <!-- End of Amount in Words Row -->


        <!-- Signature Row -->
        <tr>
            <td colspan="9"><h5 class="header-main p-2"></h5></td>
        </tr>
        <tr>
            <td colspan="3" rowspan="5">
                <img class="p-4" style="width:450px;height:250px" src="{{asset('img/sign.jpg')}}">
            </td>
            <td colspan="1" rowspan="5">
                <img class="p-4" style="width:auto;height:250px"   src="{{asset('img/seal.jpg')}}">
            </td>
            <td colspan="4" rowspan="4"><h5 class="header-main text-left">Total Amount before Tax
                    @if(\App\User::find($invoice->user_id)->state === 'Assam')
                    <br>Add: CGST
                    <br>Add:SGST
                    @else
                        Add: IGST
                    @endif
                    <br>Total
                    Tax Amount(GST)</h5></td>
            <td><h5 class="d-flex justify-content-center">
                    @if($courseDetails->is_gst)
                        {{round((($totalInvoiceAmount ) / (100 + $invoice->sgst + $invoice->cgst)) * 100) + $addition}}
                    @else
                        {{$totalInvoiceAmount}}
                    @endif
                </h5>
            </td>
        </tr>
        @if(\App\User::find($invoice->user_id)->state === 'Assam')
        <tr>
            <td><h5 class="d-flex justify-content-center">
                    @if($courseDetails->is_gst)
                        {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))) / 2)}}
                    @else
                        0
                    @endif
                </h5></td>
        </tr>
        <tr>
            <td><h5 class="d-flex justify-content-center">
                    @if($courseDetails->is_gst)
                        {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))) / 2)}}
                    @else
                        0
                    @endif
                </h5></td>
        </tr>
        @else
            <tr>
                <td rowspan="2"><h5 class="d-flex justify-content-center">
                        @if($courseDetails->is_gst)
                            {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))))}}
                        @else
                            0
                        @endif
                    </h5></td>
            </tr>
            <tr><td></td></tr>
        @endif
        <tr>
            <td><h5 class="d-flex justify-content-center">
                    @if($courseDetails->is_gst)
                        {{round(($totalInvoiceAmount - ($totalInvoiceAmount / (1 + (($invoice->sgst + $invoice->cgst)/100)))))}}
                    @else
                        0
                    @endif
                    </h5></td>
        </tr>
        <tr>
            <td colspan="4"><h5 class="header-main" style="background-color : #b0d4f1">Total Amount After Tax</h5></td>
            <td><h5 class="d-flex justify-content-center">{{$invoice->amount}}</h5></td>
        </tr>
        <tr>
            <td colspan="9">
                <div class="row invoice invoice-footer">
                    <div class="col-sm-12 text-center">
                        WWW.ACSINDIAIAS.COM
                    </div>
                </div>
            </td>
        </tr>

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
        const take = n => xs => xs.slice(0,n);
        const drop = n => xs => xs.slice(n);
        const reverse = xs => xs.slice(0).reverse();
        const comp = f => g => x => f (g (x));
        const not = x => !x;
        const chunk = n => xs =>
            isEmpty(xs) ? [] : [take(n)(xs), ...chunk (n) (drop (n) (xs))];

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

            let makeGroup = ([ones,tens,huns]) => {
                return [
                    num(huns) === 0 ? '' : a[huns] + ' hundred ',
                    num(ones) === 0 ? b[tens] : b[tens] && b[tens] + '-' || '',
                    a[tens+ones] || a[ones]
                ].join('');
            };

            let thousand = (group,i) => group === '' ? group : `${group} ${g[i]}`;

            if (typeof n === 'number')
                return numToWords(String(n));
            else if (n === '0')
                return 'zero';
            else
                return comp (chunk(3)) (reverse) (arr(n))
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
