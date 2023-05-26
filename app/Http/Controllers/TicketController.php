<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Label;
use App\Models\Ticket;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $labels = Label::all();
        return view('tickets.create-ticket', compact('categories','labels'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title'=>['raquired'],
        //     'message'=>['raquired'],
        //     'priority'=>['raquired', Rule::in(['high','medium','low']),],
        //     'category_id'=>['raquired']
        // ]);
        // $file = $request->file('asset');
        // $filename = uniqid() . '.' . $file->getClientOriginalExtension();


        // $path = $file->storeAs('public/uploads', $filename);
      
        // $ticket = new Ticket();
        // $ticket->title =$request->input('title');
        // $ticket->message =$request->input('message');
        // $ticket->label_id =$request->input('label_id');
        // $ticket->category_id =$request->input('category_id');
        // $ticket->priority =$request->input('priority');
        // $ticket->asset = '/' . $path;
        // $ticket->creator =$request->user()->id;
        // $ticket->save();
    }
}
