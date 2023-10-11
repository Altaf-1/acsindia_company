@extends('layouts.main')
@section('title')
    Graph
@endsection
@section('links')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type = "text/javascript">
        google.charts.load('current', {packages: ['corechart']});
    </script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
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
    <!--navbar-->
    <section id="header" style="background-image: url({{asset('comimages/bk3.webp')}});">
        <!-- #navigation start -->
        @include('partials.navbar')

    </section>
    <div class="container emp-profile mt-3">

        <div class="text-center p-4 bg-white shadow-lg rounded-lg">
            Course : <strong>{{$course->course}}</strong>
        </div>
        <div id = "container" style = "width: auto; height: 400px; margin: 0 auto">
        </div>
        <script language = "JavaScript">
            function drawChart() {
                // Define the chart to be drawn.
                var data = google.visualization.arrayToDataTable([

                    ['Test Name', 'Score', { role: 'annotation' }],
                        @foreach($results as $score)
                    ['{{$score->test_name}}',  {{$score->marks}},'{{$score->marks}}%'],
                    @endforeach


                ]);

                var options = {title: 'Exam Score'};

                // Instantiate and draw the chart.
                var chart = new google.visualization.ColumnChart(document.getElementById('container'));
                chart.draw(data, options);
            }
            google.charts.setOnLoadCallback(drawChart);
        </script>

    </div>


@endsection

@section('scripts')


    <script type="text/javascript">
        setInterval(function() {
            $("#data").load(location.href+" #data>*","");
        }, 10000);
    </script>
@endsection
