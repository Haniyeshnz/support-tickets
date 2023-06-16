<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LabelController;
use Illuminate\Support\Facades\Route;

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


// Admin Route
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/users', [AdminController::class, 'getUsers'])->name('admin.users');


    //categories Route
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('categories/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

    //Labels Route
    Route::get('labels', [LabelController::class, 'index'])->name('labels.index');
    Route::get('labels/create', [LabelController::class, 'create'])->name('labels.create');
    Route::post('labels', [LabelController::class, 'store'])->name('labels.store');
    Route::delete('labels/{label}', [LabelController::class, 'destroy'])->name('labels.destroy');
    Route::get('labels/{label}', [LabelController::class, 'edit'])->name('labels.edit');
    Route::post('labels/{label}', [LabelController::class, 'update'])->name('labels.update');
}); //End Group Admin Middleware


//Agent Route
Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
});
//End Group Agent Middleware 

//ticket Route
Route::get('create/tickets', [TicketController::class, 'new'])->name('ticket.new');
Route::get('tickets', [TicketController::class, 'index'])->name('ticket.index');
Route::post('tickets', [TicketController::class, 'create'])->name('ticket.create');
Route::get('tickets/{id}', [TicketController::class, 'show']);
Route::delete('tickets/{id}', [TicketController::class, 'destroy']);
