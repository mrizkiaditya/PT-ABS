@extends('layouts.main')

@section('container')


<div class="jumbotron bg-jumbotron">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active btn-carousel" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="btn-carousel" aria-label="Slide 2"></button>
          {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="btn-carousel" aria-label="Slide 3"></button> --}}
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/bg/1.jpeg" class="d-block w-100 rounded" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/bg/7.jpeg" class="d-block w-100 rounded" alt="...">
          </div>
          {{-- <div class="carousel-item">
            <img src="../img/bg/3.jpeg" class="d-block w-100 rounded" alt="...">
          </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>


<div class="container contents">
  <div class="title-produk mb-3">
    <h2 class="text-center" data-aos="flip-left" data-aos-duration="1000">@lang('navbar.home')</h2>
</div>
    <div class="row justify-content-center" data-aos="fade-down">
      <div class="col-lg-8">

              <div class="row">
  
                 <div class="col-lg-6 mb-3">
                  <div class="card card-product" style=" background-color: #2746b0">
                    <img src="../img/bg/5.jpeg" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-light pb-3 fw-bold">@lang('navbar.about')</h5>
                        <p class="card-text text-light">@lang('navbar.text1')</p>
                        <a href="/about" class="btn" style=" background-color: white; color:#2746b0;">@lang('navbar.seemore')</a>
                    </div>
                  </div>
                 </div>


                 <div class="col-lg-6 mb-3">
                  <div class=" card card-product" style=" background-color: #2746b0">
                      <img src="../img/bg/4.jpeg" style="height: 200px;" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title text-light pb-3 fw-bold">@lang('navbar.vision'), @lang('navbar.mission') & @lang('navbar.value')</h5>
                          <p class="card-text text-light">@lang('navbar.visitxt'). @lang('navbar.misitxt') @lang('navbar.valuetxt')</p>
                          <a href="/about" class="btn" style=" background-color: white; color:#2746b0;">@lang('navbar.seemore')</a>
                      </div>
                  </div>
                </div>

                 <div class="col-lg-6 mb-3">
                  <div class="card card-product" style=" background-color: #2746b0">
                    <img src="../img/bg/7.jpeg" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-light pb-3 fw-bold">@lang('navbar.ourpro')</h5>
                        <p class="card-text text-light">@lang('navbar.text3')</p>
                        <a href="/others" class="btn" style=" background-color: white; color:#2746b0;">@lang('navbar.seemore')</a>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-6 mb-3">
              <div class=" card card-product" style=" background-color: #2746b0">
                  <img src="../img/bg/3.jpeg" style="height: 200px;" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title text-light pb-3 fw-bold">@lang('navbar.contact')</h5>
                        <p class="card-text text-light">Jl. Alternatif Cileungsi – Gandoang, Gg. Jaya Kusuma RT. 06 RW. 03 Kp. Mampir Barat,
                          Kecamatan Cileungsi Kabupaten Bogor, Jawa Barat 16820 | budiarto70agung@yahoo.com | +62 8128 0690 138</p>
                        <a href="/contact" class="btn" style=" background-color: white; color:#2746b0;">@lang('navbar.seemore')</a>
                    </div>
              </div>
          </div> --}}
              
    
            <div class="col-lg-6 mb-3">
                <div class=" card card-product" style=" background-color: #2746b0">
                    <img src="../img/bg/abs-customer-1.jpg" style="height: 200px;" class="card-img-top" alt="...">
                       <div class="card-body">
                          <h5 class="card-title text-light pb-3 fw-bold">@lang('navbar.ourcus')</h5>
                          <p class="card-text text-light">@lang('navbar.custext')</p>
                          <a href="/customer" class="btn" style=" background-color: white; color:#2746b0;">@lang('navbar.seemore')</a>
                      </div>
                </div>
            </div>
                

            <div class="col-lg-6 mb-3">
              <div class=" card card-product" style=" background-color: #2746b0">
                  <img src="../img/bg/6.jpeg" style="height: 200px;" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title text-light pb-3 fw-bold">@lang('navbar.ourfact')</h5>
                        <p class="card-text text-light">@lang('navbar.factext')</p>
                        <a href="/factory" class="btn" style=" background-color: white; color:#2746b0;">@lang('navbar.seemore')</a>
                    </div>
              </div>
          </div>

              

          </div>
      </div>

            <div class="col-lg-3 mb-3">

              <div class="card-product">
                <div class="text-center">
                  <img src="../img/bg/agung.jpg" style="width: 200px; height:auto;" class="card-img-top rounded" alt="...">
                </div>
                  <div class="card-body">
                      <h5 class="card-title fw-bolder ">Director :</h5>
                      <p>Agung Budiarto | Blitar, 17 Maret 1970 | 0877 8267 3429 | budiarto70agung@yahoo.com</p>
                      {{-- <li class="text-dark listed-contact">> S1 Tek. Perkapalan ITS Surabaya <b>(1990-1994)</b></li>
                      <li class="text-dark listed-contact">> S2 Manajemen STIE SUPRA/KALBE Jakarta <b>(2003-2005)</b></li>
                      <li class="text-dark listed-contact">> CHIEF OF UK FOOTBALL - ITS SURABAYA <b>(1991-1992)</b></li>
                      <li class="text-dark listed-contact">> CHIEF OF HIMATEKPAL - ITS SURABAYA <b>(1992-1993)</b></li>
                      <li class="text-dark listed-contact">> SENATOR SENAT MAHASISWA - ITS SURABAYA <b>(1993-1994)</b></li>
                      <li class="text-dark listed-contact">> QA MANAGER PT. REXAM <b>(1995-1997)</b></li>
                      <li class="text-dark listed-contact">> ENGINEERING MANAGER PT. FORINDOPRIMA PERKASA  <b>(1998)</b></li>
                      <li class="text-dark listed-contact">> MARKETING MANAGER PT. FORINDOPRIMA PERKASA & PT. YANAPRIMA HASTA PERSADA (WOVEN, JUMBO BAG, PAPER BAG) GRESIK <b>(1999-2000)</b></li>
                      <li class="text-dark listed-contact">> MARKETING MANAGER PT. INTI ABADI KEMASINDO (WOVEN BAG, JUMBO BAG, PAPER BAG) BOGOR <b>(2001-2008)</b></li>
                      <li class="text-dark listed-contact">> OWNER / DIRECTOR PT. ANUGRAH BUMI SAMUDRA BOGOR <b>(2008- NOW)</b></li> --}}
                  </div>
            </div>

                <div class="card-product mb-3">
                  <img src="../img/bg/contactus.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder ">@lang('navbar.office') :</h5>
                        <p class="">Jl. Alternatif Cileungsi – Gandoang, Gg. Jaya Kusuma RT. 06 RW. 03 Kp. Mampir Barat, <br> Kecamatan Cileungsi Kabupaten Bogor, Jawa Barat 16820</p>
                        <h5 class="card-title fw-bolder ">@lang('navbar.factory') :</h5>
                        <p class="">Gg. Jaya Kusuma, Mampir, Kec. Cileungsi, Kabupaten Bogor, Jawa Barat 16820</p>
                        <h5 class="card-title fw-bolder ">E-mail :</h5>
                        <li class="text-dark listed-contact">budiarto70agung@yahoo.com</li>
                        <li class="text-dark listed-contact">ptabs@ymail.com</li>
                        <h5 class="pt-2 card-title fw-bolder ">Telephone :</h5>
                        <li class="text-dark listed-contact">+62 8128 0690 138</li>
                        <li class="text-dark listed-contact"> +62 8778 2673 429</li>
                    </div>
              </div>

             
            
          </div>
    </div>
</div>


    
@endsection