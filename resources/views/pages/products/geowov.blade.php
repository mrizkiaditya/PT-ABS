@extends('layouts.main')

@section('container')

<div class="container">
    <div class="title-produk">
        <h2 class="text-center mb-4">{{ $title }}</h2>
    </div>
    <div class="row g-0">
        <div class="col-lg-6">
            <div class="image-produk text-center">
                <img src="../img/geowov/1.jpg" alt="Product">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="body-produk text-product">
                <p>@lang('navbar.geowov1')</p>
                <p>@lang('navbar.geowov2')</p>
            </div>
        </div>
    </div>
    <div class="application-produk">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,53.3C640,53,800,75,960,90.7C1120,107,1280,117,1360,122.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> --}}
        <div class="title-produk">
            <h2 class="text-center">Application</h2>
        </div>
        <div class="body-produk text-center mt-4">
            <p>@lang('navbar.geowov3')</p>
            <p>@lang('navbar.geowov4')</p>
        </div>
        <div class="row mb-4">
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-end">
                <img src="../img/geowov/2.jpg" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-start">
                <img src="../img/geowov/3.jpg" alt="image-produk">
            </div>
        </div>
    </div>
</div>
    
@endsection