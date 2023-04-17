<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Shop;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';

    public function Product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function Shop()
    {
        return $this->belongsTo(Shop::class,'shop_id','id');
    }
}
