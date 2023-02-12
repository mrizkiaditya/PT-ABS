@extends('layouts.main')

@section('container')

<div class="container">
    <div class="title-produk">
        <h2 class="text-center mb-4">{{ $title }}</h2>
    </div>
    <div class="image-produk text-center">
        <img src="../img/hero.png" alt="Product">
    </div>
    <div class="body-produk text-center border mt-5">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quis corporis mollitia, aperiam placeat repellendus est ratione veniam eligendi nemo. Cum autem magni culpa ipsam? Velit, accusamus consequuntur magni quos natus ab libero quod quaerat repellendus culpa vero sunt sit temporibus, quia ullam labore reprehenderit dicta voluptates earum omnis! Commodi!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias quae nostrum magnam et ullam! Dolor quo porro non impedit magnam corrupti vero sunt doloremque a eos aperiam, saepe placeat est esse incidunt, laboriosam aliquam ducimus, dignissimos ipsam asperiores voluptas commodi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, facere delectus. Et nesciunt itaque enim quam dolores? Obcaecati quas, eaque enim ab accusantium possimus maxime sit unde vel consectetur at!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil enim voluptas eveniet fugit inventore doloremque sequi ipsum vero ab exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus consectetur, molestias laborum libero recusandae.</p>
    </div>
    <div class="application-produk">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,53.3C640,53,800,75,960,90.7C1120,107,1280,117,1360,122.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> --}}
        <div class="title-produk">
            <h2 class="text-center">Application</h2>
        </div>
        <div class="body-produk text-center border mt-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quis corporis mollitia, aperiam placeat repellendus est ratione veniam eligendi nemo. Cum autem magni culpa ipsam? Velit, accusamus consequuntur magni quos natus ab libero quod quaerat repellendus culpa vero sunt sit temporibus, quia ullam labore reprehenderit dicta voluptates earum omnis! Commodi!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias quae nostrum magnam et ullam! Dolor quo porro non impedit magnam corrupti vero sunt doloremque a eos aperiam, saepe placeat est esse incidunt, laboriosam aliquam ducimus, dignissimos ipsam asperiores voluptas commodi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, facere delectus. Et nesciunt itaque enim quam dolores? Obcaecati quas, eaque enim ab accusantium possimus maxime sit unde vel consectetur at!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil enim voluptas eveniet fugit inventore doloremque sequi ipsum vero ab exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus consectetur, molestias laborum libero recusandae.</p>
        </div>
        <div class="row mb-4">
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-end">
                <img src="../img/hero.png" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-start">
                <img src="../img/hero.png" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-end">
                <img src="../img/hero.png" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-start">
                <img src="../img/hero.png" alt="image-produk">
            </div>
        </div>
    </div>
</div>
    
@endsection