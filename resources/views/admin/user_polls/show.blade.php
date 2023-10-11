@extends('layouts.admin')
@section('title')
    Graph
@endsection
@section('links')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type = "text/javascript">
        google.charts.load('current', {packages: ['corechart']});
    </script>
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

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Poll</h6>
    </div>

    <div id = "container" style = "width: auto; height: 600px; margin: 0 auto">
    </div>
    <script language = "JavaScript">
        function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([

                ['Option', 'Total Response for option are {{$poll_count->total}}', { role: 'annotation' }],
                @foreach($polls as $poll)
                    ['{{$poll->answer}}', {{$poll->total}}, '{{ number_format(($poll->total / $poll_count->total) * 100, 2, '.', '') }}% '],
                @endforeach


            ]);

            var options = {title: 'Response Chart'};

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container'));
            chart.draw(data, options);
        }
        google.charts.setOnLoadCallback(drawChart);
    </script>




@endsection

@section('scripts')


    <script type="text/javascript">
        setInterval(function() {
            $("#data").load(location.href+" #data>*","");
        }, 10000);
    </script>
@endsection
