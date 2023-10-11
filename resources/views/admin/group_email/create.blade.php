@extends('layouts.admin')
@section('links')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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


    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Add Group Email</h1>
                </div>
                <div>
                    <a href="{{ route('admin.group.email.index') }}" class="btn btn-primary"> View All </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Add Group Email</h2>
                        </div>

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row ec-vendor-uploads">
                                <div class="col-lg-12">
                                    <div class="ec-vendor-upload-detail">
                                        <form class="row g-3" action="{{ route('admin.group.email.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="form-group font-weight-bold">
                                                    <label for="course">UPSC Course:</label>
                                                    <select class="form-control multiple" name="upsc[]" multiple>
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}">{{ $course->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group font-weight-bold">
                                                    <label for="course">APSC Course:</label>
                                                    <select class="form-control multiple" name="apsc[]" multiple>
                                                        @foreach ($apscs as $apsc)
                                                            <option value="{{ $apsc->id }}">{{ $apsc->title }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group font-weight-bold">
                                                    <label for="course">RECORDED Course:</label>
                                                    <select class="form-control multiple" name="recorded[]" multiple>
                                                        @foreach ($records as $record)
                                                            <option value="{{ $record->id }}">
                                                                {{ $record->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group font-weight-bold">
                                                    <label for="course">STUDY Course:</label>
                                                    <select class="form-control multiple" name="study[]" multiple>
                                                        @foreach ($studies as $study)
                                                            <option value="{{ $study->id }}">
                                                                {{ $study->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="subject" class="form-label">Subject</label>
                                                <textarea style="width: 100%" required name="subject" placeholder="Subject"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="email_body" class="form-label">Email Body</label>
                                                <textarea rows="8" id="editor1" required name="email_body" placeholder="Email Body"></textarea>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
@stop
@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.multiple').select2();
        });
    </script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
@stop
