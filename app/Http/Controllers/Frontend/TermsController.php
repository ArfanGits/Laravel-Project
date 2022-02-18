<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Terms Condition'
        ];
        return view('frontend.pages.terms.terms',$data);
    }
}
