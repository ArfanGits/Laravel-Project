<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Shopping Cart'
        ];
        return view('frontend.pages.shopping-cart.shopping-cart',$data);
    }
}
