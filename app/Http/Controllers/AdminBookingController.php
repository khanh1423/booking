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
        $data = Booking::find($request->id);
        
        return view('admin.booking.edit_booking', compact('data'));
    }

    public function update(Request $request, $id){
        Booking::where('id', $id)->update([
            'status' => $request->status
        ]);

        return redirect(route('admin.booking.index'))->with('update_booking','Successfully Complete');
    }
}
