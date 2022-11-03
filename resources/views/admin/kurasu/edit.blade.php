@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Class</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-kurasu/' . $kurasu->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $kurasu->name }}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
