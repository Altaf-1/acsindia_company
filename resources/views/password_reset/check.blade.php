<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet"
          href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <title>Login</title>
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #B0BEC5;
            background-repeat: no-repeat
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px
        }

        .card2 {
            margin: 0px 40px
        }

        .logo {
            width: 200px;
            height: 100px;
            margin-top: 20px;
            margin-left: 35px
        }

        .image {
            width: 560px;
            height: 280px
        }

        .border-line {
            border-right: 5px solid #030303
        }

        .facebook {
            background-color: #3b5998;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .twitter {
            background-color: #1DA1F2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .linkedin {
            background-color: #2867B2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .line {
            height: 5px;
            width: 45%;
            background-color: #030303;
            margin-top: 10px;

        }


        .text-sm {
            font-size: 14px !important
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input,
        textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        a {
            color: inherit;
            cursor: pointer
        }

        .btn-blue {
            background-color: #1A237E;
            width: 150px;
            color: #fff;
            border-radius: 2px
        }

        .btn-blue:hover {
            background-color: #000;
            cursor: pointer
        }

        .bg-blue {
            color: #fff;
            background-color: #1A237E
        }

        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 120px;
                width: 100px;
                height: 100px;
            }

            .image {
                width: 350px;
                height: 250px
            }

            .border-line {
                border-right: none
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px
            }
        }

        body {
            background-image: url({{asset('comimages/corbg.webp')}});
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }
    </style>
</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto mt-5">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"><img src="{{asset('comimages/apsc-logo.jpeg')}}" class="logo"></div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"><img
                            src="{{asset('comimages/lo.gif')}}" class="image"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h3 class="mb-0 mr-4 mt-2 font-weight-bold">Forgot Password</h3>

                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="row px-3">
                            <label class="mb-1">
                                <h6 class="mb-0 front-weight-bold">Email Address</h6>
                            </label>
                            <input id="email" type="email"
                                   class="mb-4 form-control" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus
                                   placeholder="Enter a valid email address">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1">
                                <h6 class="mb-0 front-weight-bold">Phone number</h6>
                            </label>
                            <input type="text" placeholder="phone"
                                   class="form-control" name="phone"
                                   required>
                        </div>

                        <div class="row mb-3 px-3 mt-3">
                            <button type="submit" class="btn btn-blue text-center">CONFIRM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</body>
</html>
