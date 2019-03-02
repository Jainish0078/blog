<?php

namespace App\Http\Controllers;
use App\Category;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Category $category, Review $review)
    {   
        $review = Review::all();
        $category = Category::all();
        return view('product')->with('categories','reviews', $review,  $category);
    }

    public function store(Review $review, Request $request)
    {
       // Store in database
       $review = new Review([
        'message' => $request->message,
        'name' => $request->name,
        'number' => $request->number,
        'is_approved' => $request->is_approved=0,
        
    ]);
        $review->save();

        return redirect()->back();  
    }

    public function show(Review $review) 
    {
        $review = Review::all();
        return view('review')->with('reviews' , $review);
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->back(); 
    }

    public function approve($id)
    {
        $review = Review::where('id', '=', e($id))->first();
          if($review)
            {
                $review->is_approved = 1;
                $review->save();
            }   
        return redirect()->back();
    }

    public function curbstone(Category $category)
    {
        $category = Category::all();
        return view('curb-stone')->with('categories'  , $category);
    }

    public function bricks(Category $category)
    {
        $category = Category::all();
        return view('bricks')->with('categories'  , $category);
    }

    public function zigzag(Category $category)
    {
        $category = Category::all();
        return view('zigzag-paver')->with('categories'  , $category);
    }

    public function jumbopaver(Category $category)
    {
        $category = Category::all();
        return view('jumbo-paver')->with('categories'  , $category);
    }

    public function iPaver(Category $category)
    {
        $category = Category::all();
        return view('i-paver')->with('categories'  , $category);
    }



}