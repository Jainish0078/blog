<?php

namespace App\Http\Controllers;
use App\Category;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

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


    public function coverblockpost(Request $request, Review $review)
    {
        $review = new Review([
            'message' => $request->message,
            'name' => $request->name,
            'number' => $request->number,
            'is_approved' => $request->is_approved=0,
            
        ]);
            $review->save();
            
        return redirect()->back();
    }

    public function coverblockview(Review $review)
    {
        $review = Review::all();
        return view('cover-block')->with('reviews', $review);
    }

    public function curbstonepost(Request $request, Review $review)
    {
        $review = new Review([
            'message' => $request->message,
            'name' => $request->name,
            'number' => $request->number,
            'is_approved' => $request->is_approved=0,
            
        ]);
            $review->save();
            
        return redirect()->back();
    }

    public function curbstoneview(Review $review)
    {
            $review = Review::all();
            return view('curb-stone')->with('reviews', $review);
    }

    public function rccpipepost(Request $request, Review $review)
    {
        $review = new Review([
            'message' => $request->message,
            'name' => $request->name,
            'number' => $request->number,
            'is_approved' => $request->is_approved=0,
            
        ]);
            $review->save();
            
        return redirect()->back();
    }

    public function rccipeview(Review $review)
    {
        $review = Review::all();
        return view('rcc-pipe')->with('reviews', $review);
    }

    public function rubbermoldpost(Request $request, Review $review)
    {
        $review = new Review([
            'message' => $request->message,
            'name' => $request->name,
            'number' => $request->number,
            'is_approved' => $request->is_approved=0,
            
        ]);
            $review->save();
            
        return redirect()->back();
    }

    public function rubbermoldview(Review $review)
    {
        $review = Review::all();
        return view('rubber-mold-pavers')->with('reviews', $review);
    }

    public function zigzag(Category $category)
    {
        return view('zigzag-paver')->with('categories'  , $category);
    }

    public function jumbopaver(Category $category)
    {
        return view('jumbo-paver')->with('categories'  , $category);
    }

    public function iPaver(Category $category)
    {
        return view('i-paver')->with('categories'  , $category);
    }



}