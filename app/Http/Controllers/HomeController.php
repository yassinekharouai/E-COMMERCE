<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {

        $product = Product::all();

        return view('home.index',compact('product'));
    }

    public function login_home()
    {
        $product = Product::all();

        return view('home.index',compact('product'));
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

        return view('home.product_details', compact('data'));
    }

}
