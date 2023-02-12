@extends('layouts.main')

@section('container')

<div class="section-about mb-5">
    <div class="title-about">
        <h2 class="text-center fw-bolder" data-aos="flip-left" data-aos-duration="1000">@lang('navbar.about')</h2>
    </div>
    <div class="container-md section-about-body text-center text-light">
        <p class="mb-4" data-aos="fade-down" data-aos-duration="1000">@lang('navbar.text1')</p>
        <p data-aos="fade-up" data-aos-duration="1000">@lang('navbar.text2')</p>
    </div>
</div>
{{-- <svg xmlns="http://www.w3.org/logo/2000/svg" viewBox="0 0 1440 320"><path fill="#2746B0" fill-opacity="1" d="M0,32L60,53.3C120,75,240,117,360,117.3C480,117,600,75,720,64C840,53,960,75,1080,74.7C1200,75,1320,53,1380,42.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> --}}

{{-- <div class="container-md section-card-about">
    <div class="row d-flex justify-content-evenly">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="card card-about-section" data-aos="zoom-in-up">
            <div class="card-about card-body" >
              <h5 class="card-title" data-aos="zoom-out-up" data-aos-duration="1500">@lang('navbar.vision')</h5>
              <p class="card-text" data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="2000">@lang('navbar.visitxt')</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
          <div class="card card-about-section" data-aos="zoom-in-up">
            <div class="card-about card-body">
              <h5 class="card-title" data-aos="zoom-out-up" data-aos-duration="1500">@lang('navbar.mission')</h5>
              <p class="card-text" data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="2000">@lang('navbar.misitxt')</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
          <div class="card card-about-section" data-aos="zoom-in-up">
            <div class="card-about card-body">
              <h5 class="card-title" data-aos="zoom-out-up" data-aos-duration="1500">@lang('navbar.value')</h5>
              <p class="card-text" data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                @lang('navbar.valuetxt')</p>
            </div>
          </div>
        </div>
      </div>
</div> --}}
<div class="container">
  <div class="row justify-content-center" data-aos="fade-down">
    <div class="col-lg-8">
  
            <div class="row">
  
              <div class="fact-body mb-5">
                <img class="img-fluid img-fact" src="../img/bg/19.jpeg" alt="">
            </div>
          <div class="fact-body mb-5">
            <img class="img-fluid img-fact" src="../img/bg/17.jpeg" alt="">
        </div>
              <div class="fact-body mb-5">
                <img class="img-fluid img-fact" src="../img/bg/2.jpeg" alt="">
            </div>
              <div class="fact-body mb-5">
                <img class="img-fluid img-fact" src="../img/bg/18.jpeg" alt="">
            </div>
            
  
        </div>
    </div>
  
          <div class="col-lg-3 mb-3">
  
            <div class="card-product">
              <div class="text-center">
                <img src="../img/bg/agung.jpg" style="width: 200px; height:auto;" class="card-img-top" alt="...">
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