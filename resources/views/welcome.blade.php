@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mb-5">
                    <div class="card-header">
                        News
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="item-new">
                                    <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                    <div class="content">
                                        <p>2022/10/08</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                            numquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="item-new">
                                    <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                    <div class="content">
                                        <p>2022/10/08</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                            numquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="item-new">
                                    <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                    <div class="content">
                                        <p>2022/10/08</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                            numquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="item-new">
                                    <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                    <div class="content">
                                        <p>2022/10/08</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                            numquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <a href="{{ url('references') }}">More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-5">
                    <div class="card-header">
                        Posts
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="item-new">
                                    <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                    <div class="content">
                                        <p>2022/10/08</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                            numquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="item-new">
                                    <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                    <div class="content">
                                        <p>2022/10/08</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                            numquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="item-new">
                                    <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                    <div class="content">
                                        <p>2022/10/08</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                            numquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="item-new">
                                    <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                    <div class="content">
                                        <p>2022/10/08</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                            numquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <a href="{{ url('references') }}">More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-5">
                    <div class="card-header">
                        Thoi Khoa Bieu
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('assets/images/tkb.png') }}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
