<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\label;
use App\Models\Ticket;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class TicketController extends Controller
{
    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */

    public function new()
    {
        $categories = category::all();
        $labels = Label::all();
        return view('tickets.create-ticket', compact('categories', 'labels'));
    }
    public function create(Request $request)
    {
        $ticket = new Ticket();
        $ticket->tittle = $request->tittle;
        $ticket->description = $request->description;
        $ticket->label_id = $request->label_id;
        $ticket->category_id = $request->category_id;
        $ticket->priority = $request->priority;
        $ticket->user_id = auth()->user()->id;
        $ticket->save();
        if ($request->file) {
            $file = $request->file;
            dd($file);
            $filename = uniqid() . '.' . $file->getClientOriginalExtension($file);


            $path = $file->storeAs('uploads', $filename);

            $ticket->tittle = $request->title;
            $ticket->description = $request->description;
            $ticket->label_id = $request->label_id;
            $ticket->category_id = $request->category_id;
            $ticket->priority = $request->priority;
            $ticket->file_path = $path;
            $ticket->save();
        }
        return view('index');
    }
    public function file($filename)
    {
        $path = Storage::disk('public')->path('uploads/' . $filename);

        if (!Storage::disk('public')->exists('uploads/' . $filename)) {
            abort(404);
        }

        return response()->file($path);
    }



    public function show($id)
    {
        $ticket = Ticket::find($id);
    }
}
