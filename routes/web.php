<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Admin Rout
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/users', [AdminController::class, 'getUsers'])->name('admin.users');
}); //End Group Admin Middleware


 //Agent Rout
Route::middleware(['auth','role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
});
//End Group Agent Middleware 

//ticket Rout
Route::get('tickets', [TicketController::class, 'new'])->name('ticket.new');
Route::post('tickets', [TicketController::class, 'create'])->name('ticket.create');
Route::get('tickets/{id}', [TicketController::class, 'show']);
Route::delete('tickets/{id}', [TicketController::class, 'destroy']);



Route::get('index', function () {
    return view('index');
});