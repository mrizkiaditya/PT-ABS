@extends('layouts.main')

@section('container')
<div class="container">
    <div class="title-produk  mb-3">
        <h3 class="card-title text-center fw-bold">@lang('navbar.ourfact')</h3>
    </div>
    <div class="row justify-content-center" data-aos="fade-down">
        <div class="col-lg-8">
  
                <div class="row">
    
                    <div class="fact-body mb-5">
                        <img class="img-fluid mb-3 img-fact" src="../img/bg/8.jpeg" alt="">
                        <img class="img-fluid img-fact" src="../img/bg/9.jpeg" alt="">
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