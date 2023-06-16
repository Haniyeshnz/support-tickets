<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Label;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeLabelRequest;


class LabelController extends Controller
{
   
    public function index(Label $label)
    {
        $labels = Label::withCount('tickets')->paginate(4);


        return view('labels.show', compact('labels'));
    }

    public function create()
    {
        return view('labels.create');
    }

    public function store(storeLabelRequest $request)
    {
        // dd($request->all());
        Label::create($request->all());
        return redirect()->route('labels.index')->with('alert', __('Label create successfully'));
    }

    public function edit(Label $label)
    {
      
        return view('labels.edit', compact('label'));
    }

     public function update(Request $request , Label $label){
      $label->update($request->all());
      return redirect()->route('labels.index')->with('alert', __('Label update successfully'));
     }

    public function destroy( int $label)
    {
        $label = Label::find($label);
       
            $label->delete();
            return redirect()->route('labels.index', $label->slug)->with('alert', __('Label delete successfully'));
        
    }
}
