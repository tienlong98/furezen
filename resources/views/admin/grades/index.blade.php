@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>All Grades</h4>
            <a class="btn btn-primary" href="{{ route('add-grades') }}">Add Grades</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kurasu->name }}</td>
                            <td>{{ $item->subject->name }}</td>
                            <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                            <td>{{ $item->type->name }}</td>
                            <td><a href="{{ url('edit-grades/' . $item->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
