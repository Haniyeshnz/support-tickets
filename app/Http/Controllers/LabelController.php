<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Label;
use App\Models\Ticket;
use App\Http\Controllers\Controller;


class LabelController extends Controller
{
   
    public function index(Label $label)
    {
        $labels = Label::withCount('tickets')->get();


        return view('labels.show', compact('labels'));
    }

    public function create($id)
    {
    }
    public function edit(Label $label)
    {
      
        return view('labels.edit', compact('label'));
    }

     public function update(Request $request , Label $label){
      $label->update($request->all());
      return redirect()->route('labels.index');
     }

    public function destroy( int $label)
    {
        $label = Label::find($label);
       
            $label->delete();
            return redirect()->route('labels.index', $label->slug)->with('alert', __('message.label_edited'));
        
    }
}
