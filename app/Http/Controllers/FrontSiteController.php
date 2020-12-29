<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontSiteController extends Controller
{
   public function showHome(){
       return view('frontSite.index');
   }

    public function showContact(){
        return view('frontSite.contact');
    }

    public function showAbout(){
        return view('frontSite.about');
    }

    public function showJewellery(){
        return view('frontSite.jewellery');
    }

    public function showShop(){
        return view('frontSite.shop');
    }


}
