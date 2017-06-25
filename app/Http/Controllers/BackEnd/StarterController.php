<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StarterController extends Controller
{

    public function index()
    {
        return view('starter');
    }

}
