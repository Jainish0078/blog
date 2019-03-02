<?php

namespace App\Http\Controllers;
use App\ToDo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = ToDo::all();
        return view('admin')->with('todos', $todo);
    }

    public function store(ToDo $todo, Request $request)
    {
       // Store in database
       $todo = new ToDo([
        'title' => $request->title,
        
    ]);
    $todo->save();

    return redirect('admin');  
    }


    public function destroy(ToDo $todo)
    {
        $todo->delete();

        return redirect()->back(); 
    }
}
