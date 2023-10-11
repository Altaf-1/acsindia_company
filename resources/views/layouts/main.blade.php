<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--seo-->
    <meta name="description" content="Best IAS Coaching in India. Success of each aspirant is our priority. We believe in pure ethical form of service, with zero tolerance in quality learning at an affordable price for each fellow Indian.">

    <meta name="keywords" content="best ias coaching india, best ias coaching dibrugarh, best ias coaching guwahati, upsc coaching in assam, ias coaching in assam, upsc coaching in india, upsc coaching in dibrugarh, apsc coaching in dibrugarh, apsc coaching in assam, Civil Services Coaching in Dibrugarh, Civil Services Coaching in Assam">
    
    <meta name="facebook-domain-verification" content="yfona0xozigkv1u2v85tfzs9psf6nc" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title')</title>
    {{--    cdn and link    --}}
<!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('comimages/gbar.webp')}}" type="image/x-icon">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    @yield('links')
    <script src="{{asset('js/sweetalert2.min.js')}}"></script>
    {{--    custom styles   --}}
    @yield('styles')
    <!-- Facebook Pixel Code -->
    
    
</head>
<body>
<!-- end header area -->
@yield('content')

@yield('new_navbar')

@yield('mob_navbar')

<!-- #footer area start -->
@yield('footer')
<!-- #footer area end -->
<!-- JavaScript File -->
<!-- jQuery -->
@yield('scripts')
<!--Start of Tawk.to Script-->

<!--<script type="text/javascript">-->
<!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
<!--(function(){-->
<!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
<!--s1.async=true;-->
<!--s1.src='https://embed.tawk.to/60c9f66565b7290ac63644dd/1f8aekvdq';-->
<!--s1.charset='UTF-8';-->
<!--s1.setAttribute('crossorigin','*');-->
<!--s0.parentNode.insertBefore(s1,s0);-->
<!--})();-->
<!--</script>-->

<!--End of Tawk.to Script-->

<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1064530010689229');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1064530010689229&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>
