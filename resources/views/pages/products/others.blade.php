@extends('layouts.main')

@section('container')

<div class="container">
    <div class="title-produk">
        <h2 class="text-center" data-aos="flip-left" data-aos-duration="1000">@lang('navbar.othersp')</h2>
    </div>
    <div class="container body-product">
        <div class="row" data-aos="fade-down">
            <div class="col-lg-4 mb-3">
                <div class="card card-product">
                    <img src="../img/jumbo/1.jpeg" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Jumbo Bag</h5>
                        <p class="card-text">@lang('navbar.jumboexcerpt')</p>
                        <a href="/jumbo" class="btn text-light" style=" background-color: #2746b0">@lang('navbar.seemore')</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card card-product">
                    <img src="../img/geowov/2.jpg" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Geotex Woven</h5>
                        <p class="card-text">@lang('navbar.geowovexcerpt')</p>
                        <a href="/geowov" class="btn text-light" style=" background-color: #2746b0">@lang('navbar.seemore')</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <img src="../img/sling/2.jpeg" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Sling Bag</h5>
                        {{-- <a href="" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card">
                    <img src="../img/asphalt/1.jpeg" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Asphalt Bag</h5>
                        {{-- <a href="#" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card">
                    {{-- <img src="../img/geowov/3.jpg" style="height: 200px;" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Geotex Non-Woven</h5>
                        {{-- <a href="/geowov" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mb-3">
                <div class="card">
                    {{-- <img src="assets/2.png" style="height: 200px;" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Geo Bag</h5>
                        {{-- <a href="#" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card">
                    {{-- <img src="assets/2.png" style="height: 200px;" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Geo Tub</h5>
                        {{-- <a href="#" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card">
                    {{-- <img src="assets/2.png" style="height: 200px;" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">PP Bag</h5>
                        {{-- <a href="#" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card">
                    {{-- <img src="assets/2.png" style="height: 200px;" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">PP Belt</h5>
                        {{-- <a href="#" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card">
                    {{-- <img src="assets/2.png" style="height: 200px;" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Pepp Rope</h5>
                        {{-- <a href="#" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card">
                    {{-- <img src="assets/2.png" style="height: 200px;" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title pb-3 fw-bold">Plastic Bag Biodegradable</h5>
                        {{-- <a href="#" class="btn text-light">See More</a> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    
@endsection