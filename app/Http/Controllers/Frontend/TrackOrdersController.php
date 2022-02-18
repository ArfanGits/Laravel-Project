<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackOrdersController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Track Orders'
        ];
        return view('frontend.pages.track-orders.track-orders', $data);
    }
}
