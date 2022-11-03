@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Type Of Grades</h4>
            <a class="btn btn-primary" href="{{ route('add-type') }}">Add Type</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($type as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>

                            <td><a href="{{ url('edit-type/' . $item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('delete-type/' . $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
