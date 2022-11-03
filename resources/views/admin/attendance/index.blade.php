@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>All Attendence</h4>
            <a class="btn btn-primary" href="{{ route('add-attendance') }}">Add Attendence</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Shift</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendance as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kurasu->name }}</td>
                            <td>{{ $item->subject->name }}</td>
                            <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                            <td>{{ $item->shift }}</td>
                            <td><a href="{{ url('edit-attendance/' . $item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
