<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Pivot;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        SEOMeta::setTitle("Andı Mühendislik");
        SEOMeta::setDescription("Andı Mühendislik");
        SEOMeta::setCanonical(url()->full());
        $Hakkimizda = Page::where('id', '=',1)->first();
        return view('frontend.index', compact('Hakkimizda'));
    }



    public function categorydetail($url)
    {
        $Detay = ProductCategory::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();
        views($Detay)->cooldown(60)->record();
        $Product = Product::with(['getCategory'])->where('category',$Detay->id)->get();
        SEOMeta::setTitle($Detay->title.' | Andı Mühendislik');
        SEOMeta::setDescription("Andı Mühendislik");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.product.category', compact('Detay', 'Product'));
    }

    public function corporatedetail($url)
    {
        $Detay = Page::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();
        SEOMeta::setTitle($Detay->title.' | Andı Mühendislik');
        SEOMeta::setDescription("Andı Mühendislik");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.corporate.detail', compact('Detay'));
    }

    public function servicedetail($url)
    {
        $Detay = Service::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();
        SEOMeta::setTitle($Detay->title.' | Andı Mühendislik');
        SEOMeta::setDescription("Andı Mühendislik");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.service.detail', compact('Detay'));
    }


    public function project(){

        $Project = Service::where('category', 3 )->get();

        return view('frontend.project.index',compact('Project'));
    }

    public function productdetail($url)
    {
        $Detay = Product::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();


        SEOMeta::setTitle($Detay->title.' | Deri Makinaları | Andı Mühendislik');
        SEOMeta::setDescription("Andı Mühendislik");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.product.index', compact('Detay'));
    }

    public function partdetail($url)
    {
        $Detay = Product::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();
        SEOMeta::setTitle($Detay->title.' | Yedek Parça | Andı Mühendislik');
        SEOMeta::setDescription("Andı Mühendislik");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.product.index', compact('Detay'));
    }

    public function gallery(){

        return view('frontend.gallery.index');
    }

    public function contactus(){

        SEOMeta::setTitle('İletişim | Andı Mühendislik');
        SEOMeta::setDescription("Andı Mühendislik");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.corporate.contactus');

    }


    public function reference(){

        return view('frontend.reference.index');
    }

    public function blog(){

        return view('frontend.blog.index');
    }

}
