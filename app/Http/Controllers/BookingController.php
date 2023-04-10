<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request){
        $data = Product::where('slug', '=', $request->slug)->first();
        return view('admin.booking.index', compact('data'));
    }
}
