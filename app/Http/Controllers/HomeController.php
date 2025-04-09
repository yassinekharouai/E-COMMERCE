<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {

        $product = Product::all();

        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where('user_id',$userid)->count();
        }
        else
        {
            $count = '';
        }

        


        return view('home.index',compact('product','count'));
    }

    public function login_home()
    {
        $product = Product::all();

        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where('user_id',$userid)->count();
        }
        else
        {
            $count = '';
        }

        return view('home.index',compact('product','count'));
    }

    public function product_details($id)
    {
        // Ensure the ID is a number to prevent invalid queries
        if (!is_numeric($id)) {
            abort(404); // Show 404 error if the ID is not valid
        }

        $data = Product::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where('user_id',$userid)->count();
        }
        else
        {
            $count = '';
        }

        return view('home.product_details', compact('data','count'));
    }

    public function add_cart($id)
    {

        $product_id = $id;

        $user = Auth::user();

        $user_id = $user->id;

        $data = new Cart;

        $data->user_id = $user_id;

        $data->product_id = $product_id;

        $data->save();

        return redirect()->back()->with('success', 'Product added to cart.');



    }

}
