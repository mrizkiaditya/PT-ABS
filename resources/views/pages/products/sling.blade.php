@extends('layouts.main')

@section('container')

<div class="container">
    <div class="title-produk">
        <h2 class="text-center mb-4">{{ $title }}</h2>
    </div>
    <div class="image-produk text-center">
        <img src="../img/sling/1.jpeg" alt="Product">
    </div>
    <div class="body-produk  mt-5">
        <div class="text-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, repudiandae!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, repudiandae!</p>
        </div>
    </div>
    <div class="application-produk">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,53.3C640,53,800,75,960,90.7C1120,107,1280,117,1360,122.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> --}}
        <div class="title-produk">
            <h2 class="text-center">Application</h2>
        </div>
        <div class="body-produk text-center  mt-4">
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, enim?</p>
        </div>
        <div class="row mb-4">
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-end">
                <img src="../img/sling/2.jpeg" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-start">
                <img src="../img/sling/3.jpeg" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-end">
                <img src="../img/sling/application.jpeg" alt="image-produk">
            </div>
    </div>
</div>
    
@endsection