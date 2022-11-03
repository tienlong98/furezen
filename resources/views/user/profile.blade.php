@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Thong tin cua hoc sinh
                    </div>
                    <div class="card-body">
                        <form action="{{ url('update-hocsinh/' . $hocsinh->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $hocsinh->name }}">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $hocsinh->email }}">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="">Class</label>
                                    <select class="form-select" name="kurasu_id">
                                        @if ($hocsinh->kurasu_id == null)
                                            <option value="" selected>Select Class
                                            </option>
                                        @else
                                            <option value="{{ $hocsinh->kurasu_id }}" selected>{{ $hocsinh->kurasu->name }}
                                            </option>
                                        @endif
                                        @foreach ($kurasu as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
