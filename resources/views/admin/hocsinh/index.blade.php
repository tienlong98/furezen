@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>All Student</h4>
            {{-- <a class="btn btn-primary" href="{{ route('add-kurasu') }}">Add Class</a> --}}
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hocsinh as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>

                            @if ($item->kurasu_id == null)
                                <td>Chua chon lop</td>
                            @else
                                <td>{{ $item->kurasu->name }}</td>
                            @endif
                            <td>
                                <a href="{{ url('delete-hocsinh/' . $item->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
