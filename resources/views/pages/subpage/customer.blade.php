@extends('layouts.main')

@section('container')
<div class="container">
    <div class="title-produk mb-5">
        <h2 class="text-center" data-aos="flip-left" data-aos-duration="1000">@lang('navbar.ourcus')</h2>
    </div>
    <div class="row justify-content-center" data-aos="fade-down">
        <div class="col-lg-8 mb-2">
            
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <img src="../img/bg/10.jpeg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">PT. SEMEN TONASA</h5>
                      <p class="card-text">Supplied Since 2010.</p>
                    </div>
                  </div>
                </div>
              </div>

            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <img src="../img/bg/11.jpeg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">PT. LAFARGE HOLCIM TBK</h5>
                      <p class="card-text">Supplied Since 2012.</p>
                    </div>
                  </div>
                </div>
              </div>

            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <img src="../img/bg/12.jpeg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">LAFARGE MALDIVES CEMENT</h5>
                      <p class="card-text">Supplied February Since 2017.</p>
                    </div>
                  </div>
                </div>
              </div>
              
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <img src="../img/bg/13.jpeg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">PT. BOSOWA</h5>
                      <p class="card-text">Supplied Since February 2017.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <img src="../img/bg/14.jpeg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">PT. SEMEN PADANG</h5>
                      <p class="card-text">Supplied Since February 2017.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <img src="../img/bg/15.jpeg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">PT. CEMINDO GEMILANG (SEMEN MERAH PUTIH)</h5>
                      <p class="card-text">Supplied Since 2015.</p>
                    </div>
                  </div>
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
                    </div>
              </div>
  
                  <div class="card-product">
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

<div class="customer-section">
    <div class="title">
        <h2 data-aos="fade-down">@lang('navbar.ourcus')</h2>
    </div>
    <div class="customer-body">
        <div class="customer-sub-title">
            <h2 data-aos="flip-left" data-aos-duration="1000">Indonesia :</h2>
        </div>
        <div class="container-fluid row-logo">
           <div class="row pb-4 text-center">
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <img src="../img/logo/holcim.png" alt="logo-customers" height="100" width="250">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1200">
                <img src="../img/logo/pupuk-kujang.png" alt="logo-customers"  height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1400">
                <img src="../img/logo/bosowa.png" alt="logo-customers"  height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="../img/logo/pama.png" alt="logo-customers"  height="150" width="150">
            </div>
           </div>
           <div class="row text-center">
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1600">
                <img src="../img/logo/semen-padang.png" alt="logo-customers" height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="../img/logo/semen-tonasa.png" alt="logo-customers" height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1800">
                <img src="../img/logo/tereos.png" alt="logo-customers" height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1900">
                <img src="../img/logo/unitedcan.png" alt="logo-customers" height="150" width="150">
            </div>
           </div>
           <div class="row last-row">
            <div class="col-logo-last col-logo-first col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <img src="../img/logo/ferro.png" alt="logo-customers" height="50" width="100">
            </div>
            <div class="col-logo-last col-logo-second col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1300">
                <img src="../img/logo/wilmar.png" alt="logo-customers" height="50" width="100">
            </div>
            <div class="col-logo-last col-logo-third col-lg-4 col-md-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="../img/logo/olam.png" alt="logo-customers" height="50" width="100">
            </div>
           </div>
        </div>
            <div class="container bottom-customers">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12" data-aos="fade-right" data-aos-duration="1000">
                        <ul>
                            <li>PT. Nielsen Engineriing & Technology (Nickel & Cement Project)</li>
                            <li>PT. Hogindo Feedmill (Feedmill Industry)</li>
                            <li>PT. Multiprima Usahatama (Transportation to Halliburton, Holcim)</li>
                            <li>PT. Sinar Agro Komposindo (Fertilizer Industry)</li>

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mb-5" data-aos="fade-right" data-aos-duration="1000">
                        <ul>
                            <h2 class="export-text">Export :</h2>
                            <li>Han Yeek Trading , Malaysia</li>
                            <li>Manuver Marketing Network, Phillipines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection