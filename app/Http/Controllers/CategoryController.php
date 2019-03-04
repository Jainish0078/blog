<?php

namespace App\Http\Controllers;
use App\Category;
use App\Inquiry;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class CategoryController extends Controller
{   
    
    public function view(Category $category)
    {
        $category = Category::all();
        return view('profile')->with('categories', $category);
    }

    public function adminadd()
    {   
        return view('add-new-admin');
    }
    public function adminstore(Request $request,User $user)
    {
        $filename = null;
		if($request->file('image')) 
            { 
                $file = $request->file('image');
                $filename = str_replace(' ', '_', time(). '_' .$file->getClientOriginalName());
                $file->storeAs('public/profile_images', $filename);
                
            }

        $user = new User([
            'name' => $request->name,
            'email'  => $request->email,
            'password' => Hash::make($request->password),
            'location'  => $request->location,
            'education'  => $request->education,
            'notes'  => $request->notes,
            'images' => $filename,
            
        ]);
        $user->save();
        
        return redirect('admin');
    }
    
    public function listadmin(User $user)
    {
        $user = User::all();
        return view('list-admin')->with('users', $user);
    }

    public function editadmin(User $user)
    {
        $user['user'] = User::find($user->id);
        return view('edit-admin')->with('users', $user);
    }

    public function updateadmin(Request $request,User $user)
    {
        $filename = null;
		if($request->file('image')) 
            { 
                $file = $request->file('image');
                $filename = str_replace(' ', '_', time(). '_' .$file->getClientOriginalName());
                $file->storeAs('public/profile_images', $filename);
                
            }

        $user->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,            
            'education' => $request->education,
            'location'=> $request->location,
            'notes'=> $request->notes,
            'images' => $filename,
             
            ]);
            
            $user->save();
            return redirect('list-admin');
    }

    public function update(Request $request, User $user)
    { 
        $filename = null;
		if($request->file('image')) 
            { 
                $file = $request->file('image');
                $filename = str_replace(' ', '_', time(). '_' .$file->getClientOriginalName());
                $file->storeAs('public/profile_images', $filename);
                
            }
       
         $user->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'education' => $request->education,
            'location'=> $request->location,
            'notes'=> $request->notes,
            'images'=> $filename,
            
            ]);
            
            // $user->save();
            return redirect()->back();
    
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

    public function destroyadmin(User $user)
    {
        $user->delete();

        return redirect()->back(); 
    }

}
