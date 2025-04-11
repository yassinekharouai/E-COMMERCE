<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Category;

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

    public function mycart()
    {
        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where('user_id',$userid)->count();

            $cart = Cart::where('user_id',$userid)->get();
        }
        else
        {
            $count = '';
        }

        return view('home.mycart',compact('count','cart'));
    }


    public function category_section()
    {
        if(Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
        } else {
            $count = '';
        }
        
        $categories = Category::all(); // Get all categories
        return view('home.category_section', compact('count', 'categories'));
    }

    public function show_category($id)
    {
        if(Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
        } else {
            $count = '';
        }
        
        $category = Category::find($id);
        $products = Product::where('category', $category->category_name)->get();
        $categories = Category::all();
        
        return view('home.category_products', compact('count', 'category', 'products', 'categories'));
    }

    public function remove($id)
    {
        Cart::destroy($id);
        return redirect()->back()->with('success', 'Item removed from cart');
    }


    public function testimonial(){

        if(Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
        } else {
            $count = '';
        }
        return view('home.testimonial',compact('count'));
    }
}
