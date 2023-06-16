<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
   
    public function index(Category $category)
    {
        $categories = Category::withCount('tickets')->paginate(4);


        return view('categories.show', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Category::create($request->all());
        return redirect()->route('categories.index')->with('alert', __('Category create successfully'));
    }

    public function edit(Category $category)
    {
      
        return view('categories.edit', compact('category'));
    }

     public function update(Request $request ,Category $category){
      $category->update($request->all());
      return redirect()->route('categories.index')->with('alert', __('Category update successfully'));
     }

    public function destroy( int $category)
    {
        $label = Category::find($category);
       
            $label->delete();
            return redirect()->route('categories.index', $label->slug)->with('alert', __('Category delete successfully'));
        
    }
}
