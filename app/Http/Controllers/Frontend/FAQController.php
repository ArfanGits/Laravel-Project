<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(){
        $data = [
            'title' => 'FAQ'
        ];
        return view('frontend.pages.faq.faq',$data);
    }
}
