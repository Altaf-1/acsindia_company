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


    @if($invoice->course == "IAS OFFLINE BATCH 2022")
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
                    <h4>Name : {{\App\User::where('id',$invoice->user_id)->get()->first()->name}}</h4>
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
                    <h4>State : {{\App\User::where('id',$invoice->user_id)->get()->first()->state}}</h4>
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
                    <h4>Address : {{\App\User::where('id',$invoice->user_id)->get()->first()->postal}}</h4>
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
        @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
        <tr>
            <td colspan="2" rowspan="2"><h5 class="header-main">Course Details</h5></td>
            <td rowspan="2"><h5 class="header-main">Date</h5></td>
            <td rowspan="2"><h5 class="header-main">Mode</h5></td>
            <td rowspan="2"><h5 class="header-main">Taxable Value</h5></td>
            <td colspan="2"><h5 class="header-main">CGST</h5></td>
            <td colspan="2"><h5 class="header-main">SGST</h5></td>
            <td rowspan="2"><h5 class="header-main">Total Amount Paid</h5></td>
        </tr>
        <tr>
            <td><h5 class="header-main">Rate</h5></td>
            <td><h5 class="header-main">Amount</h5></td>
            <td><h5 class="header-main">Rate</h5></td>
            <td><h5 class="header-main">Amount</h5></td>
        </tr>
        @else
            <tr>
                <td colspan="2" rowspan="2"><h5 class="header-main">Course Details</h5></td>
                <td rowspan="2"><h5 class="header-main">Date</h5></td>
                <td rowspan="2"><h5 class="header-main">Mode</h5></td>
                <td rowspan="2"><h5 class="header-main">Taxable Value</h5></td>
                <td colspan="4"><h5 class="header-main">IGST</h5></td>
                <td rowspan="2"><h5 class="header-main">Total Amount Paid</h5></td>
            </tr>
            <tr>
                <td colspan="2"><h5 class="header-main">Rate</h5></td>
                <td colspan="2"><h5 class="header-main">Amount</h5></td>
            </tr>
        @endif

        @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                <tr>
                    <td colspan="2"><h5 class="d-flex justify-content-end">{{$invoice->course}}</h5></td>
                    <td><h5 class="d-flex justify-content-end"></h5></td>
                    <td><h5 class="d-flex justify-content-end"></h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            45763
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">{{9}}%</h5></td>
                    <td><h5 class="d-flex justify-content-end">
                           4119
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">{{9}}%</h5></td>
                    <td><h5 class="d-flex justify-content-end">
                           4119
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">54000</h5></td>
                </tr>
            @else
                <tr>
                    <td colspan="2"><h5 class="d-flex justify-content-end">{{$invoice->course}}</h5></td>
                    <td><h5 class="d-flex justify-content-end"></h5></td>
                    <td><h5 class="d-flex justify-content-end"></h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            45763
                        </h5></td>
                    <td colspan="2"><h5 class="d-flex justify-content-end">{{18}}%</h5></td>
                    <td colspan="2"><h5 class="d-flex justify-content-end">
                            8238
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">54000</h5></td>
                </tr>
            @endif


            @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                <tr>
                    <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
                    <td><h5 class="d-flex justify-content-end">{{\Carbon\Carbon::parse($invoice->created_at)->format('d-M-Y')}}</h5></td>
                    <td><h5 class="d-flex justify-content-end">Razorpay</h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            8475
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">{{9}}%</h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            763
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">{{9}}%</h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            763
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">10000</h5></td>
                </tr>
            @else
                <tr>
                    <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
                    <td><h5 class="d-flex justify-content-end">{{\Carbon\Carbon::parse($invoice->created_at)->format('d-M-Y')}}</h5></td>
                    <td><h5 class="d-flex justify-content-end">Razorpay</h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            8475
                        </h5></td>
                    <td colspan="2"><h5 class="d-flex justify-content-end">{{18}}%</h5></td>
                    <td colspan="2"><h5 class="d-flex justify-content-end">
                            1526
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">10000</h5></td>
                </tr>
            @endif

            <tr>
                <td colspan="10" style="background-color : #b0d4f1; height: 20px"><h5 class="d-flex justify-content-end"></h5></td>
            </tr>

        <tr>
            <td colspan="4"><h5 class="header-main m-0">Pending</h5></td>
            <td><h5 class="d-flex justify-content-end">
                    37288
                </h5></td>
            @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                <td><h5 class="d-flex justify-content-end">
                        9%</h5></td>
                <td><h5 class="d-flex justify-content-end">
                      3356</h5></td>
                <td><h5 class="d-flex justify-content-end">9%</h5></td>
                <td><h5 class="d-flex justify-content-end">
                      3356
                    </h5></td>
            @else
                <td colspan="2"><h5 class="d-flex justify-content-end">
                        18%
                    </h5></td>
                <td colspan="2"><h5 class="d-flex justify-content-end">
                       6712
                    </h5></td>
            @endif
            <td><h5 class="d-flex justify-content-end">44000</h5></td>
        </tr>
        <tr>
            <td colspan="10">
                <input type="hidden" id="amount_value" value="10000">
                <h5 class="header-main p-5 text-uppercase" id="amount">

                </h5>
            </td>
        </tr>
        <tr>
            <td colspan="10"><h5 class="header-main p-2"></h5></td>
        </tr>
        <tr>
            <td colspan="3" rowspan="8">
                <img class="p-4" style="width:450px;height:250px" src="{{asset('img/sign.jpg')}}">
            </td>
            <td colspan="2" rowspan="8">
                <img class="p-4" style="width:auto;height:250px" src="{{asset('img/seal.jpg')}}">
            </td>
         <tr>
            <td colspan="4"><h5 class="header-main">Total Amount before Tax</h5></td>
            <td><h5 class="d-flex justify-content-center">45763</h5></td>
        </tr>
        @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')

            <tr>
                <td colspan="4"><h5 class="header-main">Add: CGST</h5></td>
                <td><h5 class="d-flex justify-content-center">4119</h5></td>
            </tr>
            <tr>
                <td colspan="4"><h5 class="header-main">Add: SGST</h5></td>
                <td><h5 class="d-flex justify-content-center">4119</h5></td>
            </tr>
                    @else
            <tr>
                <td colspan="4"><h5 class="header-main">Add: IGST</h5></td>
                <td><h5 class="d-flex justify-content-center">8238</h5></td>
            </tr>
        @endif
        <tr>
            <td colspan="4"><h5 class="header-main">Total Tax Amount(GST)</h5></td>
            <td><h5 class="d-flex justify-content-center">8238</h5></td>
        </tr>
        <tr>
            <td colspan="4"><h5 class="header-main">Total Amount After Tax</h5></td>
            <td><h5 class="d-flex justify-content-center">54000</h5></td>
        </tr>
        <tr>
            <td colspan="4"><h5 class="header-main">Total Amount Paid</h5></td>
            <td><h5 class="d-flex justify-content-center">10000</h5></td>
        </tr>
        <tr>
            <td colspan="4"><h5 class="header-main">Pending</h5></td>
            <td><h5 class="d-flex justify-content-center">44000</h5></td>
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

    </table>
    @else
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
                        <h4>Name : {{\App\User::where('id',$invoice->user_id)->get()->first()->name}}</h4>
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
                        <h4>State : {{\App\User::where('id',$invoice->user_id)->get()->first()->state}}</h4>
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
                        <h4>Address : {{\App\User::where('id',$invoice->user_id)->get()->first()->postal}}</h4>
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
                @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                    <td colspan="2"><h5 class="header-main">CGST</h5></td>
                    <td colspan="2"><h5 class="header-main">SGST</h5></td>
                @else
                    <td colspan="4"><h5 class="header-main">IGST</h5></td>
                @endif
                <td rowspan="2"><h5 class="header-main">Total Amount Paid</h5></td>
            </tr>
            <tr>
                @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                    <td><h5 class="header-main">Rate</h5></td>
                    <td><h5 class="header-main">Amount</h5></td>
                    <td><h5 class="header-main">Rate</h5></td>
                    <td><h5 class="header-main">Amount</h5></td>
                @else
                    <td colspan="2"><h5 class="header-main">Rate</h5></td>
                    <td colspan="2"><h5 class="header-main">Amount</h5></td>
                @endif
            </tr>
            <tr>
                <td colspan="2"><h5 class="d-flex justify-content-end">{{$invoice->course}}</h5></td>
                <td><h5 class="d-flex justify-content-end">1</h5></td>
                <td><h5 class="d-flex justify-content-end">
                        @if($invoice->amount == 2000)
                            1640
                        @else
                            {{($invoice->amount - (((10000 / 100) * $invoice->cgst) + ((10000 / 100) * $invoice->sgst)) )}}
                        @endif
                    </h5></td>
                @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                    <td><h5 class="d-flex justify-content-end">{{$invoice->cgst}}%</h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            @if($invoice->amount == 2000)
                                180
                            @else
                                {{((10000 / 100) * $invoice->cgst)}}
                            @endif
                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">{{$invoice->sgst}}%</h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            @if($invoice->amount == 2000)
                                180
                            @else
                                {{((10000 / 100) * $invoice->sgst)}}
                            @endif</h5></td>
                @else
                    <td colspan="2"><h5 class="d-flex justify-content-end">{{$invoice->sgst + $invoice->cgst}}%</h5></td>
                    <td colspan="2"><h5 class="d-flex justify-content-end">
                            @if($invoice->amount == 2000)
                                360
                            @else
                                {{((10000 / 100) * ($invoice->sgst + $invoice->cgst))}}
                            @endif
                        </h5></td>
                @endif
                <td><h5 class="d-flex justify-content-end">{{$invoice->amount}}</h5></td>
            </tr>
            <tr>
                <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end "></h5></td>
                <td><h5 class="d-flex justify-content-end "></h5></td>
                @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
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
            <tr>
                <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end "></h5></td>
                <td><h5 class="d-flex justify-content-end "></h5></td>
                @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
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
            <tr>
                <td colspan="2"><h5 class="d-flex justify-content-end"></h5></td>
                <td><h5 class="d-flex justify-content-end "></h5></td>
                <td><h5 class="d-flex justify-content-end "></h5></td>
                @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
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


            <tr>
                <td colspan="3"><h5 class="header-main m-0" style="background-color : #b0d4f1">Total</h5></td>
                <td><h5 class="d-flex justify-content-end">
                        @if($invoice->amount == 2000)
                            1640
                    @else
                        {{($invoice->amount - (((10000 / 100) * $invoice->cgst) + ((10000 / 100) * $invoice->sgst)) )}}
                    @endif</td>
                @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                    <td><h5 class="d-flex justify-content-end">

                        </h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            @if($invoice->amount == 2000)
                                180
                            @else
                                {{((10000 / 100) * $invoice->cgst)}}
                            @endif</h5></td>
                    <td><h5 class="d-flex justify-content-end"></h5></td>
                    <td><h5 class="d-flex justify-content-end">
                            @if($invoice->amount == 2000)
                                180
                            @else
                                {{((10000 / 100) * $invoice->sgst)}}
                            @endif
                        </h5></td>
                @else
                    <td colspan="2"><h5 class="d-flex justify-content-end">
                            {{$invoice->sgst + $invoice->cgst}}%
                        </h5></td>
                    <td colspan="2"><h5 class="d-flex justify-content-end">
                            @if($invoice->amount == 2000)
                                360
                            @else
                                {{((10000 / 100) * ($invoice->sgst + $invoice->cgst))}}
                            @endif
                        </h5></td>
                @endif
                <td><h5 class="d-flex justify-content-end">{{$invoice->amount}}</h5></td>
            </tr>
            <tr>
                <td colspan="9">
                    <input type="hidden" id="amount_value" value="{{$invoice->amount}}">
                    <h5 class="header-main p-5 text-uppercase" id="amount">

                    </h5>
                </td>
            </tr>
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
                        @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                            <br>Add: CGST
                            <br>Add: SGST
                        @else
                            Add: IGST
                        @endif
                        <br>Total
                        Tax Amount(GST)</h5></td>
                <td><h5 class="d-flex justify-content-center">
                        @if($invoice->amount == 2000)
                            1640
                        @else
                            {{($invoice->amount - (((10000 / 100) * $invoice->cgst) + ((10000 / 100) * $invoice->sgst)) )}}
                        @endif
                    </h5>
                </td>
            </tr>
            @if(\App\User::where('id',$invoice->user_id)->get()->first()->state === 'Assam')
                <tr>
                    <td><h5 class="d-flex justify-content-center">
                            @if($invoice->amount == 2000)
                                180
                            @else
                                {{((10000 / 100) * $invoice->cgst)}}
                            @endif</h5></td>
                </tr>
                <tr>
                    <td><h5 class="d-flex justify-content-center">
                            @if($invoice->amount == 2000)
                                180
                            @else
                                {{((10000 / 100) * $invoice->sgst)}}
                            @endif</h5></td>
                </tr>
            @else
                <tr>
                    <td rowspan="2"><h5 class="d-flex justify-content-center">
                            @if($invoice->amount == 2000)
                                360
                            @else
                                {{((10000 / 100) * ($invoice->sgst + $invoice->cgst))}}
                            @endif
                        </h5></td>
                </tr>
                <tr><td></td></tr>
            @endif
            <tr>
                <td><h5 class="d-flex justify-content-center">
                        @if($invoice->amount == 2000)
                            360
                        @else
                            {{((10000 / 100) * ($invoice->sgst + $invoice->cgst))}}
                        @endif</h5></td>
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
    @endif



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
