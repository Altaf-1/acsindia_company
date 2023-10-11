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
    <title>Register</title>
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
        
        .card1 {
            margin: 180px 40px
            
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
            color: #1c1d1f;
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
            .card1 {
            margin: 0px 0px
            
            }
        }

        body {
            background-color: #134982;
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
                <div class="card1 pb-5 justify-content-center">
                    <div class="row  justify-content-center  border-line" ><img src="{{asset('comimages/log-4.png')}}" class="image"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-4 px-3">
                            <h3 class="mb-0 mr-4 mt-2 font-weight-bold">Sign Up</h3>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="row px-3"><label class="mb-1">
                            </label> <input id="name" class="mb-4 form-control @error('name') is-invalid @enderror"
                                            type="text"
                                            name="name" placeholder="Name" value="{{ old('name') }}" required
                                            autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row px-3"><label class="mb-1">
                            </label> <input class="mb-4 form-control @error('phone') is-invalid @enderror" type="text"
                                            name="phone" placeholder="Phone Number">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row px-3"><label class="mb-1">
                            </label>
                            <input class="mb-4 form-control @error('email') is-invalid @enderror" type="email"
                                   name="email" placeholder="Email address" value="{{ old('email') }}" required
                                   autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row px-3"><label class="mb-1">
                            </label>
                            <select id="state" type="state"
                                    class="mb-4 form-control @error('state') is-invalid @enderror"
                                    name="state"
                                    value="{{ old('state') }}" required autocomplete="state" placeholder="Select State"
                                    class=”form-control”>
                                <option selected disabled>Choose Your State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>

                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row px-3"><label class="mb-1">
                            </label>
                            <input id="district" type="text"
                                   class="mb-4 form-control @error('district') is-invalid @enderror"
                                   name="district"
                                   value="{{ old('district') }}" required autocomplete="district"
                                   placeholder="District">
                            @error('district')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row px-3"><label class="mb-1">
                            </label>
                            <input id="password" type="password"
                                   class="mb-4 form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row px-3"><label class="mb-1">

                            </label>
                            <input id="password-confirm" type="password" class="mb-4 form-control"
                                   name="password_confirmation" required
                                   autocomplete="new-password" placeholder="Confirm Password">
                        </div>

                        <div class="row mb-3 px-3 mt-3">
                            <button type="submit" class="btn btn-blue text-center">SIGNUP</button>
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

