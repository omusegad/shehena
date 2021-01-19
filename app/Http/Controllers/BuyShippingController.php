<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyShippingController extends Controller
{
    public function index(){
        return view("buyshipping.index");
    }
}
