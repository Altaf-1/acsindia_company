<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"  content="width=device-width , user-scalable=no">
    <title>TEST</title>
    <link rel="shortcut icon" href="{{asset('comimages/gbar.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/qstyle.css')}}">

    <script src="{{asset('js/sweetalert2.min.js')}}"></script>
</head>
<body>
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-sm-12 justify-content-start">
            <div id="quiz" style="display: none">

                <div class="row">
                    <div class="col-sm-12">
                        <div id="question"></div>
                    </div>
                </div>

                <div class="row text-white">
                    <div id="choices">
                        <div class="col col-sm-12 mb-2  d-flex justify-content-center">
                            <div class="choice" id="W" onclick="checkAnswer('W')"></div>
                        </div>
                        <div class="col col-sm-12 mb-2 d-flex justify-content-center">
                            <div class="choice" id="X" onclick="checkAnswer('X')"></div>
                        </div>
                        <div class="col col-sm-12 mb-2 d-flex justify-content-center">
                            <div class="choice" id="Y" onclick="checkAnswer('Y')"></div>
                        </div>
                        <div class="col col-sm-12 mb-2 d-flex justify-content-center">
                            <div class="choice" id="Z" onclick="checkAnswer('Z')"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="timer">
                        <div id="counter"></div>
                        <div id="btimeGauge"></div>
                        <div id="timeGauge"></div>
                    </div>
                    <div id="progress"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div id="scoreContainer" style="display: none;"></div>
        </div>
    </div>
</div>
<div class="container">
    <div >
        <div class="col-sm-12 mb-2 d-flex justify-content-center mt-5 pt-5">
            <div id="start" class="btn btn-success">Start Test!</div>
        </div>

        <div class="col-sm-12  d-flex justify-content-center">
            <button id="end" class="btn btn-danger" onclick="myFunction()">End Quiz</button>
        </div> 
    </div>

</div>

<div class="row mt-2">

</div>
@yield('js')

</body>

</html>

