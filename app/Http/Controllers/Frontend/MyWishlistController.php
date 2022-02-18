<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyWishlistController extends Controller
{
    public function index(){
        $data = [
            'title' => 'My Wishlist'
        ];
        return view('frontend.pages.my-wishlist.my-wishlist',$data);
    }
}
