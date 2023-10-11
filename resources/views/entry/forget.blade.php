
@extends('layouts.log')
@section('content')
    <body>
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
    @if ($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Confirm Your Mail and Phone number</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="input-group form-group">
                            <input placeholder="email" id="email" type="email"
                                   class="form-control" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                        </div>
                        <div class="input-group form-group">
                            <input  type="text" placeholder="phone"
                                    class="form-control" name="phone"
                                    required>
                        </div>
                        <div class="form-group">
                            <button class="btn float-right login_btn text-dark"
                                    type="submit">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
