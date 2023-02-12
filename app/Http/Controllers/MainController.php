<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function home()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('pages.home' , [
            "title" => "Home"
        ]);
    }

    //sementara
    public function others()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.others', [
            "title" => "Other Products"
        ]);
    }

    //sementara

    public function about()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.about', [
            "title" => "About"
        ]);
    }

    public function jumbo()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.jumbo', [
            "title" => "Jumbo Bag"
        ]);
    }

    public function sling()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.sling', [
            "title" => "Sling Bag"
        ]);
    }

    public function asphalt()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.asphalt', [
            "title" => "Asphalt Bag"
        ]);
    }

    public function geobag()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.geo-bag', [
            "title" => "Geo Bag"
        ]);
    }

    public function geononwov()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.geo-nonwov', [
            "title" => "Geotex Non-Woven"
        ]);
    
    }
    public function geotub()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.geo-tub', [
            "title" => "Geo Tub"
        ]);
    }

    public function geowov()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.geowov', [
            "title" => "Geotex Woven"
        ]);
    }

    public function pbag()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.p-bag', [
            "title" => "PP Bag"
        ]);
    }
    
    public function pbelt()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.p-belt', [
            "title" => "PP Belt"
        ]);
    }
    public function pepprope()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.pepp-rope', [
            "title" => "Pepp Rope"
        ]);
    }

    public function plastic()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.products.plastic', [
            "title" => "Plastic Bag Biodegradable"
        ]);
    }

    public function customer()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.subpage.customer', [
            "title" => "Our Customers"
        ]);
    
    }
    public function factory()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }
        return view('pages.subpage.factory', [
            "title" => "Factory Operational"
        ]);
    }
    // SWITCH LANGUAGE

    public function switch($locale)
    {
        Session::put('locale', $locale);

        return redirect()->back();
    }
    
}