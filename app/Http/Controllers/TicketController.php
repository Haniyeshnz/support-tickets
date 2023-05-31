<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Label;
use App\Models\ticket;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web,admin');
    }
    public function new()
    {
        $categories = Category::all();
        $labels = Label::all();
        return view('tickets.create-ticket', compact('categories', 'labels'));
    }

    public function create(Request $request)
    {
        auth()->user()->createTicket()->create([
           $request->all()+['file_path'=>$this->uploadFile($request)]
            ]);
    }
    private function uploadFile($request){
        if ($request->file) {
            $file = $request->file('file');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('uploads', $filename);
            return($path);

    }
}
    

}
