@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        出席率
                    </div>
                    <div class="card-body">
                        <p>セッション数: {{ $tongsobuoihoc }}</p>
                        <p>出席を取った授業: {{ $tongbuoidihoc }}</p>
                        <p>欠席: {{ $sobuoinghihoc }}</p>
                        <p>遅刻の授業: {{ $sobuoidihoc_muon }}</p>
                        <p>出席率: {{ number_format($ti_le_di_hoc) }}% <span class="text-danger">*( 5回遅刻すると1回欠席になります。)</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
