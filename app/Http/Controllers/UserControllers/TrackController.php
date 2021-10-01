<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function track(){
        return view('UserPages.track');
    }
}
