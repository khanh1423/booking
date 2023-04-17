<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $data  = Customer::orderBy('id', 'asc')->get();

        return view('admin.customer.index', compact('data'));
    }
}
