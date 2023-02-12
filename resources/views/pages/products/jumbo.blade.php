@extends('layouts.main')

@section('container')

<div class="container">
    <div class="title-produk">
        <h2 class="text-center mb-4">{{ $title }}</h2>
    </div>
    <div class="row g-0 product-row">
      <div class="col-lg-6">
        <div class="image-produk text-center">
          <img src="../img/jumbo/1.jpeg" class="rounded" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);" alt="Product">
      </div>
      </div>
      <div class="col-lg-5">
        <div class="body-produk">
          <div class="text-product">
              <p>@lang('navbar.jumbo1')</p>
              <p>@lang('navbar.jumbo2')</p>
          </div>
      </div>
      </div>
        <table class="table table-hover table-sm table-bordered text-center">
            <tbody>
              <tr>
                <th scope="row" class="row-text-table">Mesh</th>
                <td> Up to 16 x 16 per Square inch</td>
              </tr>
              <tr>
                <th scope="row" class="row-text-table">Denier</th>
                <td>Up to 2000 Denier</td>
              </tr>
              <tr>
                <th scope="row" class="row-text-table">Body</th>
                <td>Tubular, U/ 4 Panel</td>
              </tr>
              <tr>
                <th scope="row" class="row-text-table">Bottom</th>
                <td>Flat, Discharge Spout</td>
              </tr>
              <tr>
                <th scope="row" class="row-text-table">Top</th>
                <td>Open, Skirt, Filling Spout</td>
              </tr>
              <tr>
                <th scope="row" class="row-text-table">Loops</th>
                <td>2 loops, 4 loops</td>
              </tr>
              <tr>
                <th scope="row" class="row-text-table">SWL</th>
                <td>250 kg - 2000 kg</td>
              </tr>
              <tr>
                <th scope="row" class="row-text-table">Safety Factor</th>
                <td>5 : 1</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="application-produk">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,53.3C640,53,800,75,960,90.7C1120,107,1280,117,1360,122.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> --}}
        <div class="title-produk">
            <h2 class="text-center">Application</h2>
        </div>
        <div class="body-produk text-center  mt-4">
            <p>@lang('navbar.jumbo2')</p>
            <p>@lang('navbar.jumbo2')</p>
        </div>
        <div class="row mb-4">
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-end">
                <img src="../img/jumbo/1.jpeg" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-start">
                <img src="../img/jumbo/2.jpeg" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-end">
                <img src="../img/jumbo/3.jpeg" alt="image-produk">
            </div>
            <div class="image-application pb-3 col-lg-6 col-md-12 col-12 text-start">
                <img src="../img/jumbo/4.jpeg" alt="image-produk">
            </div>
    </div>
</div>
    
@endsection