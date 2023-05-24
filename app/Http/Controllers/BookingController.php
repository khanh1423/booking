<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Product;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request){
        $data = Product::where('slug', '=', $request->slug)->first();
        // $created_at = SlotTime::orderBy('created_at')->distinct()->get('created_at');
        $date_time = Carbon::now()->toDateTimeString();
        
        $current_day = date("Y-m-d", strtotime($date_time));
        // dd($current_day);
        return view('admin.booking.index', compact('data','current_day'));
    }

    public function getdate(Request $request){
        $oder_time = Booking::where('shop_id', '=', 1)->where('product_id', '=', $request->product_id)
        ->where('oder_date', '=', $request->date)->get();
        
        $data_time = '';
        $data_array_time = [];
        $array = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];

        if($oder_time){

            for ($i=0; $i <$oder_time->count() ; $i++) { 
                $data_time = $oder_time[$i]['oder_time'];
                array_push($data_array_time,$data_time);
            }

            for ($i=0; $i < count($data_array_time); $i++) { 
                switch($data_array_time[$i]) {
                    case "07:00:00":
                        $array[0] += 1;
                        break;
                    case "08:00:00":
                        $array[1] += 1;
                        break;
                    case "09:00:00":
                        $array[2] += 1;
                        break;
                    case "10:00:00":
                        $array[3] += 1;
                        break;
                    case "11:00:00":
                        $array[4] += 1;
                        break;
                    case "12:00:00":
                        $array[5] += 1;
                        break;
                    case "13:00:00":
                        $array[6] += 1;
                        break;
                    case "14:00:00":
                        $array[7] += 1;
                        break;
                    case "15:00:00":
                        $array[8] += 1;
                        break;
                    case "16:00:00":
                        $array[9] += 1;
                        break;
                    case "17:00:00":
                        $array[10] += 1;
                        break;
                    case "18:00:00":
                        $array[11] += 1;
                        break;
                    case "19:00:00":
                        $array[12] += 1;
                        break;
                    case "20:00:00":
                        $array[13] += 1;
                        break;
                }
                // if($data_array_time[$i] == "07:00:00"){
                //     $array[0] += 1;
                // }
            }
            
        }
        
        return view('admin.booking.datetime', compact('array'));
    }

    public function store(Request $request){
        $valdidateData = $request->validate([
            'name' => 'required:booking',
            'phone' => 'required'
        ],[
            'name.required'    => 'Name not entered',
            'phone.required'   => 'Phone not entered'
        ]);

        $check_customer = Customer::where('phone',$request->phone)->first();
        if($check_customer == null){
            $customer = new Customer;
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->created_at = new DateTime;
            $customer->updated_at = new DateTime;
            $customer->save();
        }

        $booking = new Booking;
        if($check_customer == null){
            $booking->customer_id = $customer->id;
        }else{
            $booking->customer_id = $check_customer->id;
        }
        $booking->shop_id    = $request->shop_id;
        $booking->product_id = $request->product_id;
        $booking->oder_time  = $request->oder_time;
        $booking->oder_date  = $request->oder_date;
        $booking->created_at = new DateTime;
        $booking->updated_at = new DateTime;
        $booking->save();

        return redirect()->back()->with('notification','SUCCESS');
    }

}
