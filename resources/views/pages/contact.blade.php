@extends('layouts.main')

@section('container')

<section class="section-contact">
    <div class="container-sm">
        <div class="contact-row row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="header-contact pb-3">
                    <h2 data-aos="fade-down"><i class="icon-location bi bi-geo-alt-fill" ></i> @lang('navbar.location')</h2>
                    <h5 class="text-light fw-bolder pt-3" data-aos="fade-down">@lang('navbar.office') :</h5>
                    <p class="text-light" data-aos="fade-down">Jl. Alternatif Cileungsi – Gandoang, Gg. Jaya Kusuma RT. 06 RW. 03 Kp. Mampir Barat, <br> Kecamatan Cileungsi Kabupaten Bogor, Jawa Barat 16820</p>
                    <h5 class="text-light fw-bolder pt-2" data-aos="fade-down">@lang('navbar.factory') :</h5>
                    <p class="text-light" data-aos="fade-down">Gg. Jaya Kusuma, Mampir, Kec. Cileungsi, Kabupaten Bogor, Jawa Barat 16820</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="header-contact">
                    <h2 class="pb-2" data-aos="fade-down"><i class="icon-location bi bi-envelope-fill"></i></i> E-mail</h2>
                    <li class="listed-contact" data-aos="fade-down"><i class="bi bi-caret-right-fill"></i> budiarto70agung@yahoo.com</li>
                    <li class="listed-contact" data-aos="fade-down"><i class="bi bi-caret-right-fill"></i> ptabs@ymail.com</li>
                    <br>
                </div>
                <div class="header-contact">
                    <h2 class="pb-2" data-aos="fade-down"><i class="icon-location bi bi-telephone-plus-fill"></i> Telephone</h2>
                    <li class="listed-contact" data-aos="fade-down"><i class="bi bi-caret-right-fill"></i> +62 8128 0690 138</li>
                    <li class="listed-contact" data-aos="fade-down"> <i class="bi bi-caret-right-fill"></i> +62 8778 2673 429</li>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7858757159142!2d106.98995851471771!3d-6.4215523953538876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6995085a03aa5d%3A0x900bd350aa0d4190!2sPabrik%20Karung%20Pt.%20Abs!5e0!3m2!1sid!2sid!4v1666444033355!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    
@endsection