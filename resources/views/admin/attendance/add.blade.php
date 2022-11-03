@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Add Attendence
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
                <form action="{{ url('insert-attendance') }}" method="post">
                    @csrf
                    <input type="hidden" name="kurasu_id" value="{{ $kurasu_id }}">
                    <input type="hidden" name="subject_id" value="{{ $subject_id }}">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <table class="table-bordered" Width="100%">
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Status</th>
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
                                            <label class="ps-3"><input type="radio" name="status[{{ $item->id }}]"
                                                    value="1" id="">Di hoc</label>
                                            <label class="ps-3"><input type="radio" name="status[{{ $item->id }}]"
                                                    value="2" id="">Nghi Hoc</label>
                                            <label class="ps-3"> <input type="radio" name="status[{{ $item->id }}]"
                                                    value="3" id="">Di hoc muon</label>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-lg-6 mb-3 d-flex">
                            <label for="">Tiet</label>
                            <input type="number" name="shift" id="" required>
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
