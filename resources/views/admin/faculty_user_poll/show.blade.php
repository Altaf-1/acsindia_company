@extends('layouts.admin')
@section('title')
    Graph
@endsection
@section('links')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart']
        });
    </script>
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
    @endif

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Poll</h6>
    </div>
    @foreach ($correct_answers as $ans)
        <span class="bg-success text-white p-4 d-flex align-items-center justify-content-center"><strong>
                CORRECT ANSWER :
                {{ $ans[$ans->answer] }}</strong></span>
    @endforeach
    <div id="container" style="width: auto; height: 600px; margin: 0 auto">

        @if (count($polls) > 0)
            <script language="JavaScript">
                function drawChart() {
                    // Define the chart to be drawn.
                    var data = google.visualization.arrayToDataTable([

                        ['Option', 'Total Response for option are {{ $poll_count->total }}', {
                            role: 'annotation'
                        }],
                        @php 
                        $total=0;
                        @endphp
                        @foreach ($correct_answers as $ans)
                            @foreach ($polls as $poll)
                                ['{{ $poll->answer }}', {{ $poll->total }},
                                        '{{ number_format(($poll->total / $poll_count->total) * 100, 2, '.', '') }}% '
                                    ],
                               @php
                                $total =$poll_count->total;
                                @endphp
                            @endforeach
                            @if(!in_array($ans->option_1,$polls->pluck('answer')->toArray()))
                            ['{{ $ans->option_1 }}', {{ 0 }},
                                        '{{ number_format((0 /$total ) * 100, 2, '.', '') }}% '
                                    ],   @endif
                                     @if(!in_array($ans->option_2,$polls->pluck('answer')->toArray()))
                            ['{{ $ans->option_2 }}', {{ 0 }},
                                        '{{ number_format((0 /$total ) * 100, 2, '.', '') }}% '
                                    ],   @endif
                                     @if(!in_array($ans->option_3,$polls->pluck('answer')->toArray()))
                            ['{{ $ans->option_3 }}', {{ 0 }},
                                        '{{ number_format((0 /$total ) * 100, 2, '.', '') }}% '
                                    ],   @endif
                                     @if(!in_array($ans->option_4,$polls->pluck('answer')->toArray()))
                            ['{{ $ans->option_4 }}', {{ 0 }},
                                        '{{ number_format((0 /$total ) * 100, 2, '.', '') }}% '
                                    ],
                                @endif
                            
                        @endforeach


                    ]);

                    var options = {
                        title: 'Response Chart'
                    };

                    // Instantiate and draw the chart.
                    var chart = new google.visualization.ColumnChart(document.getElementById('container'));
                    chart.draw(data, options);
                }
                google.charts.setOnLoadCallback(drawChart);
            </script>
        @else
            <h1 class="text-center"><strong>NO DATA FOUND</strong></h1>
        @endif
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        setInterval(function() {
            $("#data").load(location.href + " #data>*", "");
        }, 10000);
    </script>
@endsection
