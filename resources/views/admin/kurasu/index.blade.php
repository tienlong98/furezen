@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>All Class</h4>
            <a class="btn btn-primary" href="{{ route('add-kurasu') }}">Add Class</a>
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
                    @foreach ($kurasu as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>

                            <td><a href="{{ url('edit-kurasu/' . $item->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('delete-kurasu/' . $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
