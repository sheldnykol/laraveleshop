<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;

use App\Models\Product;





class AdminController extends Controller
{
    public function view_catagory()
    {

        $data=catagory::all();


        return view('admin.catagory',compact('data'));
    }
    public function add_catagory(Request $request)
    {
      $data=new catagory;

      $data->catagory_name=$request->catagory;

      $data->save();

      return redirect()->back()->with('message','Category Added Successfully');


    }
    public function delete_catagory($id)
    {
      $data=catagory::find($id);
      $data->delete();

      return redirect()->back()->with('message','Category Deleted Successfully');

    }

    public function view_product()
    {
      $catagory = catagory::all();
return view('admin.product',compact('catagory'));

    }

  //ADD PRODUCT FUNCTION
     public function add_product(Request $request)
     {
      $product = new product;//New table
      $product->title = $request->title;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->discount_price = $request->discount;
      $product->quantity = $request->quantity;
      $product->catagory = $request->catagory;

      $image = $request->image;
      $imagename = time().'.'.$image->getClientOriginalExtension();
      $request->image->move('product',$imagename);
      $product->image=$imagename;

      $product->save();

      return redirect()->back()->with('message','Product Added Succesfully');



     }

//SHOW PRODUCT FUNCTION
     public function show_product()
     {

        $product = product::all();
      return view('admin.show_product',compact('product'));
     }

  //DELETE PRODUCT FUNCTION
     public function delete_product($id){

      $product=product::find($id);

      $product->delete();

      return redirect()->back()->with('message','Product Deleted');
    }

    //UPDATE PRODUCT
    public function update_product($id){

      $product=product::find($id);
      $catagory=catagory::all();


      return view('admin.update_product',compact('product','catagory'));
    }

    public function update_product_confirm($id,Request $request){


    // $product=product::all();

    // dd($product);

      $product =product::find($id);

      $product->title = $request->title;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->discount_price = $request->discount;
      $product->quantity = $request->quantity;
      $product->catagory = $request->catagory;

      $image = $request->image;
      if($image){
      $imagename = time().'.'.$image->getClientOriginalExtension();
      $request->image->move('product',$imagename);
      $product->image=$imagename;
      }

      $product->save();

      //return redirect()->back(); //apla epistrefei 
      //return view('admin.show_product');
      return redirect('/show_product')->with('message','Product Updated'); //epistrefei sto show products

    
      // return view('admin.example',compact ('$product'));

    }
}


