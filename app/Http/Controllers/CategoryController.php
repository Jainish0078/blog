<?php

namespace App\Http\Controllers;
use App\Category;
use App\Inquiry;
use Illuminate\Http\Request;


class CategoryController extends Controller
{   
    public function routelist()
    {
       
    }

    public function index(Category $category)
    {
        $category = Category::all();
        return view('index')->with('categories', $category);
    }

    public function product(Category $category)
    {
        $category = Category::all();
        return view('product')->with('categories', $category);
    }

    public function create()
    {
        return view('add-category');
    }

    public function store(Request $request, Category $category)
    {
        // Validate data
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);
        

        // Store in database
        $category = new Category([
            'name' => $request->name,
            'url'  => $request->url,
            
        ]);
        $category->save();

        return redirect('list-category');        
    }

    public function show(Category $category)
    {

        $category = Category::all();
        return view('list-category')->with('categories', $category);
    }
    
    public function inquirystore(Request $request, Inquiry $inquiry)
    {
        

        // Store in database
        $inquiry = new Inquiry([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email'  => $request->email,
            'message'  => $request->message,
            
        ]);
        $inquiry->save();
    
        return back();
    }

    public function inquiryList(Inquiry $inquiry)
    {
        $inquiry = Inquiry::all();
        return view('inquiry')->with('inquiries', $inquiry);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back(); 
    }

}
