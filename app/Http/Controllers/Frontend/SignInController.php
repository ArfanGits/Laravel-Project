<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Sign In'
        ];
        return view('frontend.pages.sign-in.sign-in',$data);
    }
}
