@extends('layouts.admin')
@section('title')
    Personal Mentorship
@endsection
@section('content')
    <div class="container-fluid m-2">
        <table class="table bg-primary p-5 text-white">
            <thead>
                <tr>
                    <th scope="col">Course Name</th>
                    <th scope="col">Monady</th>
                    <th scope="col">Tuesday</th>
                    <th scope="col">Wednesday</th>
                    <th scope="col">Thusday</th>
                    <th scope="col">Friday</th>
                    <th scope="col">Saturday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @forelse($datas as $data)
                        <td>{{ $data->course_name }}</td>
                        <td>{{ $data->day1 }}</td>
                        <td>{{ $data->day2 }}</td>
                        <td>{{ $data->day3 }}</td>
                        <td>{{ $data->day4 }}</td>
                        <td>{{ $data->day5 }}</td>
                        <td>{{ $data->day6 }}</td>
                    @empty
                        <td colspan="5">NO DATA</td>
                    @endforelse
                </tr>
            </tbody>
        </table>
    </div>
@endsection
