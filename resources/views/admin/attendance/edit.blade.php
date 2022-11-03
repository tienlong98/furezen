@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Edit Attendence
        </div>
        <div class="card-body">
            <form method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="">Class</label>
                        <select class="form-select" name="kurasu_id">
                            <option value="{{ $attendance->kurasu_id }}" selected>{{ $attendance->kurasu->name }}</option>
                            @foreach ($kurasu as $item)
                                <option value="{{ $item->id }}" @if (isset($kurasu_id) && $kurasu_id == $item->id) selected @endif>
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="">Subject</label>
                        <select class="form-select" name="subject_id">
                            <option value="{{ $attendance->subject_id }}" selected>{{ $attendance->subject->name }}</option>
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
                <form action="{{ url('update-attendance/' . $attendance->id) }}" method="post">
                    @csrf
                    @method('PUT')
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
                                                    value="1" @if (isset($status[$item->id]) && $status[$item->id] == 1) checked @endif>Di
                                                hoc</label>
                                            <label class="ps-3"><input type="radio" name="status[{{ $item->id }}]"
                                                    value="2" @if (isset($status[$item->id]) && $status[$item->id] == 2) checked @endif>Nghi
                                                Hoc</label>
                                            <label class="ps-3"> <input type="radio" name="status[{{ $item->id }}]"
                                                    value="3" @if (isset($status[$item->id]) && $status[$item->id] == 3) checked @endif>Di hoc
                                                muon</label>

                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-lg-6 mb-3 d-flex">
                            <label for="">Tiet</label>
                            <input type="number" value="{{ $attendance->shift }}" name="shift" id="">
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
