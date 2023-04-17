<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index(){
        $data = Booking::orderBy('id', 'asc')->get();

        return view('admin.booking.admin_booking', compact('data'));
    }

    public function edit(Request $request){

        return view('admin.booking.edit_booking');
    }
}
