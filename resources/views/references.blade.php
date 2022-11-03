@extends('layouts.app')
@section('content')
    <style>
        header {
            width: 100vw;
            height: 25vh;
        }
    </style>
    <div>
        <header class="d-flex justify-content-center align-items-center">
            <h1>References</h1>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between mb-3 mt-1">
                            <div class="title">
                                <p class="fw-b fs-4 border-bottom border-primary">
                                    List Post
                                </p>
                            </div>
                            <div class="filter">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="item-new">
                                <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                <div class="content">
                                    <p>2022/10/08</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                        numquam!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="item-new">
                                <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                <div class="content">
                                    <p>2022/10/08</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                        numquam!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="item-new">
                                <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                <div class="content">
                                    <p>2022/10/08</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                        numquam!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="item-new">
                                <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                <div class="content">
                                    <p>2022/10/08</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                        numquam!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="item-new">
                                <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                <div class="content">
                                    <p>2022/10/08</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                        numquam!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="item-new">
                                <img class="img-new" src="{{ asset('assets/images/vd.jpg') }}" alt="">
                                <div class="content">
                                    <p>2022/10/08</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum esse quasi in
                                        numquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="timkiem mb-3">
                        <nav class="navbar">
                            <form class="container-fluid">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                    <span class="input-group-text" id="basic-addon1">
                                        <button type="submit" class="border-0">
                                            <i class="bi bi-search"></i>
                                        </button>

                                    </span>
                                </div>
                            </form>
                        </nav>
                    </div>
                    <div class="category mb-5">
                        <div class="title-category ">
                            <p class="mb-3 fs-4 fw-b"> All Categories</p>
                        </div>
                        <div class="item-category d-flex justify-content-between mb-3">
                            <img src="{{ asset('assets/images/vd.jpg') }}" width="70" height="70" alt="">
                            <div class="content">
                                <p>Laravel</p>
                            </div>
                        </div>
                        <div class="item-category d-flex justify-content-between mb-3">
                            <img src="{{ asset('assets/images/vd.jpg') }}" width="70" height="70" alt="">
                            <div class="content">
                                <p>Laravel</p>
                            </div>
                        </div>
                        <div class="item-category d-flex justify-content-between mb-3">
                            <img src="{{ asset('assets/images/vd.jpg') }}" width="70" height="70" alt="">
                            <div class="content">
                                <p>Laravel</p>
                            </div>
                        </div>

                    </div>
                    <div class="noibat">
                        <div class="title">
                            <p class="mb-3 fs-4 fw-b"> Featured Post</p>
                        </div>
                        <div class="item d-flex justify-content-between mb-3">
                            <img src="{{ asset('assets/images/vd.jpg') }}" width="70" height="70" alt="">
                            <div class="content ps-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                            </div>
                        </div>
                        <div class="item d-flex justify-content-between mb-3">
                            <img src="{{ asset('assets/images/vd.jpg') }}" width="70" height="70" alt="">
                            <div class="content ps-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                            </div>
                        </div>
                        <div class="item d-flex justify-content-between mb-3">
                            <img src="{{ asset('assets/images/vd.jpg') }}" width="70" height="70" alt="">
                            <div class="content ps-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                            </div>
                        </div>
                        <div class="item d-flex justify-content-between mb-3">
                            <img src="{{ asset('assets/images/vd.jpg') }}" width="70" height="70" alt="">
                            <div class="content ps-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
