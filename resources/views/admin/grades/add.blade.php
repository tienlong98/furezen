@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Add Grades
        </div>
        <div class="card-body">
            <form method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="">Class</label>
                        <select class="form-select" name="kurasu_id">
                            @foreach ($kurasu as $item)
                                <option value="{{ $item->id }}" @if (isset($kurasu_id) && $kurasu_id == $item->id) selected @endif>
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Subject</label>
                        <select class="form-select" name="subject_id">
                            @foreach ($subject as $item)
                                <option value="{{ $item->id }}" @if (isset($subject_id) && $subject_id == $item->id) selected @endif>
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            @isset($students)
                <form action="{{ url('insert-grades') }}" method="post">
                    @csrf
                    <input type="hidden" name="kurasu_id" value="{{ $kurasu_id }}">
                    <input type="hidden" name="subject_id" value="{{ $subject_id }}">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <table class="table-bordered" Width="100%">
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Result</th>
                                </tr>
                                @foreach ($students as $item)
                                    <tr>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            <input type="number" name="result[{{ $item->id }}]" id="">
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-lg-6 mb-3 d-flex">
                            <label for="">Type Of Grades</label>
                            <select class="form-select" name="type_id">
                                @foreach ($type as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            @endisset
        </div>
    </div>
@endsection
