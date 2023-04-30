<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

class HomeController extends Controller
{           


    public function index()
    {
        $product = product::paginate(3);
        return view('home.userpage',compact('product'));
    }
    //tha ftiaxw kati gia to reidirect an o user paei na sundenthei tha doyme to type toy user an einai 0 h 1
    public function redirect()
    {
        $usertype = Auth::user()->usertype; //ppernw to to user type apothn database 

        if($usertype=='1')
        {
            return view('admin.home');

        }
            else
        {        
            $product = product::paginate(3); //xwrizei ta proionta i gues ???? ligo periergo 
            return view('home.userpage',compact('product'));
        }
    }


    public function product_details($id)
        {

            $product = Product::find($id);

            return view('home.product_details',compact('product'));
        }


    public function add_cart(Request $request, $id)
        {
            if (Auth::id()) {

                $user = Auth::user();
                //dd($user);
                $product = product::find($id);
                //dd($product)

                $cart = new cart;

                $cart->name = $user ->name;

                $cart->email = $user ->email;

                $cart->phone = $user ->phone;

                $cart->address = $user ->address;

                $cart->product_title = $product->title;

                $cart->price = $product->title;

                $cart->Product_id =$product->id;

                $cart->quantity = $request ->quantity;

                $cart->user_id = $user ->id;

                $cart -> save() ;


                return redirect()-> back();


            }
            else {
                return redirect('login');
            }
        }
    }

