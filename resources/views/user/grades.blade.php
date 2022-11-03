@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        成績表
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($monhoc as $item)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">

                                    <p class="fw-bold mb-3">科目名:{{ $item->name }}</p>
                                    @foreach ($type as $diem)
                                        {{ $diem->name }}:@foreach ($thanhtich as $ten)
                                            @if ($ten->grades->type_id == $diem->id && $ten->grades->subject_id == $item->id)
                                                {{ $ten->result }}点

                                            @endif
                                        @endforeach
                                        <br>
                                    @endforeach

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
