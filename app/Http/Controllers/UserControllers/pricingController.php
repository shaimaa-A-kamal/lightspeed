<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pricingController extends Controller
{
    public function pricing(){
        return view('UserPages.pricing');
    }
}
