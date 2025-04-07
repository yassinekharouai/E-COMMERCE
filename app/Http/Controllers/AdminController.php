<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use Flasher\Laravel\Facade\Flasher;


class AdminController extends Controller
{
    
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->closeButton()->addSuccess('Category added successfully!');

        return redirect()->back(); 
    }
}
