<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(User $user)
    {
        $users = User::withCount([  'tickets',
        'tickets as open_tickets_count' => function ($query) {
            $query->where('status', '0:open');
        },])->paginate(4);
        


        return view('admin.usersShow', compact('users'));
    }
    public function destroy(int $user)
    {
        $user = User::find($user);
        $user->delete();
        return redirect()->route('users.index', $user->slug)->with('alert', __('User delete successfully'));
    }
}
