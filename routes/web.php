<?php

use App\Http\Livewire\ShowThread;
use App\Http\Livewire\ShowThreads;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/dashboard/threads', ShowThreads::class)->name('threads.index');
    Route::get('/dashboard/threads/{thread}', ShowThread::class)->name('thread.show');
});

require __DIR__.'/auth.php';
