<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use Flasher\Laravel\Facade\Flasher;
use App\Models\Product;



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
    public function delete_category(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function add_product()
    {

        $category = Category::all();
        return view('admin.add_product',compact('category'));
    }

    public function upload_product(Request $request) 
    {
        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
        ]);

        // Create a new product instance
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;

        // Handle image upload (if image is provided)
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();  
            $request->image->move('products', $imageName); // Saving image in public/uploads/products folder
            $data->image = $imageName;  // Store the image name in the database
        }

        // Save the product
        $data->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product uploaded successfully!');
    }



}
