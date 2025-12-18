<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index",compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'name'=> 'required|string|unique:categories,name',
        'title'=> 'nullable|string',
        'description'=> 'nullable|string',
        'icon'=>'required|image|mimes:png,jpg|max:2048',

    ]);

  $icon = $request->file('icon')->store('categories','public');

  Category::create([
    'name'=>$request->name,
    'title'=>$request->title,
    'description'=>$request->description,
    'icon'=>$icon
  ]);
  return redirect()->route('category.index')->with('success','category created successfully');
   
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::findorFail($id);
        return view("admin.category.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
