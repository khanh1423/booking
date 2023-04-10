<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderBy('id', 'asc')->get();

        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valdidateData = $request->validate([
            'name' => 'required|unique:product',
            'price' => 'required',
            'image' => 'required'
        ],[
            'name.required'    => 'Product name not entered',
            'name.unique'      => 'This product already exists',
            'price.required'   => 'Price not entered',
            'image.required'   => 'No photo selected'
        ]);
        
        $data = $request->except('_token');
        
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        $data['slug'] = Str::slug($data['name'], '-');
        //thêm ảnh
        $file = $request->image;      
        $file->move('upload/product', $file->getClientOriginalName());
        $data["image"] =  $file->getClientOriginalName();

        Product::insert($data);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
