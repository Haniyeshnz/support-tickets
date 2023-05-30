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
        auth()->user()->tickets()->create([

        ]);
    }
}
