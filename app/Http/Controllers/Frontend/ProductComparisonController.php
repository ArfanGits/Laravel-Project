<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductComparisonController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product Comparison'
        ];
        return view('frontend.pages.product-comparison.product-comparison',$data);
    }
}
