<!-- // Let's Click this button automatically when this page load using javascript -->
<!-- You can hide this button -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- main css -->
<link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<!--navbar-->

<!--navbar-->
<section id="header" style="background-image: url({{asset('comimages/bk3.webp')}});">
    <!-- #navigation start -->
@include('partials.navbar')
<!-- #navigation end -->
</section>
<div class="container pt-5">
    <div class="alert alert-success p-2">
        <h4 class="text-success display-5 mb-0">Order Has been created. Please proceed for payment</h4>
    </div>
    <div class="card">
        <div class="card-header">Order Details</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <p>Course Name</p>
                </div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">
                    <p>{{$course->title}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <p>Course Amount</p>
                </div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">
                    <h3>{{$response['amount']}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button id="rzp-button1" class="btn btn-warning text-white">Pay</button>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "{{$response['razorpayId']}}", // Enter the Key ID generated from the Dashboard
        "amount": "{{$response['amount']}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "{{$response['currency']}}",
        "name": "{{$response['name']}}",
        "description": "{{$response['description']}}",
        "image": "https://example.com/your_logo", // You can give your logo url
        "order_id": "{{$response['orderId']}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "handler": function (response) {
            // After payment successfully made response will come here
            // Let's send this response to Controller for update the payment response
            // Create a form for send this data
            // Set the data in form
            // // Let's submit the form automatically


            document.getElementById('rzp_paymentid').value = response.razorpay_payment_id;
            document.getElementById('rzp_orderid').value = response.razorpay_order_id;
            document.getElementById('rzp_signature').value = response.razorpay_signature;
            document.getElementById('rzp-paymentresponse').click();


        },
        "prefill": {
            "name": "{{$response['name']}}",
            "email": "{{$response['email']}}",
            "contact": "{{$response['contactNumber']}}"
        },
        "notes": {
            "address": "{{$response['address']}}"
        },
        "theme": {
            "color": "#ff9933"
        }
    };
    var rzp1 = new Razorpay(options);
    // window.onload = function(){
    //     document.getElementById('rzp-button1').click();
    // };
    document.getElementById('rzp-button1').onclick = function (e) {
        rzp1.open();
        e.preventDefault();
    }
</script>
<script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
<script src='{{asset("js/slick.min.js")}}'></script>
<script src='{{asset("js/main.js")}}'></script>

<script src='{{asset("js/bootstrap.min.js")}}'></script>
<script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
<script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
<script src='{{asset("js/waypoints.min.js")}}'></script>
<script src='{{asset("js/jquery.counterup.min.js")}}'></script>

<!-- I'l copy the form  -->
<!-- This form is hidden -->
<!-- Let's crate the controller function -->
<form action="{{route('user.study.complete')}}" method="POST" hidden>
    <input type="hidden" value="{{csrf_token()}}" name="_token"/>
    <input type="text" class="form-control" id="rzp_paymentid" name="rzp_paymentid">
    <input type="text" class="form-control" id="rzp_orderid" name="rzp_orderid">
    <input type="text" class="form-control" id="rzp_signature" name="rzp_signature">
    <button type="submit" id="rzp-paymentresponse" class="btn btn-primary">Submit</button>
</form>
