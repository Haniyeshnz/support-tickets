<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
   
    public function index(Category $category)
    {
        $categories = Category::withCount('tickets')->get();


        return view('categories.show', compact('categories'));
    }

    // public function create($id)
    // {
    // }
    // public function edit(Label $label)
    // {
      
    //     return view('labels.edit', compact('label'));
    // }

    //  public function update(Request $request , Label $label){
    //   $label->update($request->all());
    //   return redirect()->route('labels.index');
    //  }

    // public function destroy( int $label)
    // {
    //     $label = Label::find($label);
       
    //         $label->delete();
    //         return redirect()->route('labels.index', $label->slug)->with('alert', __('message.label_edited'));
        
    // }
}
