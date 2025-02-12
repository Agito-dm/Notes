<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::redirect('/', '/note')->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Два Route выше добавлены, так как я не делал уникальную страницу регистрации

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/note', [NoteController::class, 'index'])->name('node.index');
    // Route::get('/note/create', [NoteController::class, 'create'])->name('node.create');
    // Route::post('/note', [NoteController::class, 'store'])->name('note.store');
    // Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
    // Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
    // Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
    // Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

    Route::resource('note', NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
