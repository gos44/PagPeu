<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Mail\ContactanosMailable;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactanosController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return "Hola mundo";
});


// route::get('contactanos', function(){
//     Mail::to('gasc2004@gmail.com')->send(new ContactanosMailable);
//     return "Mensaje enviado";
// })->name('contactanos');

route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos');
route::post('contactanos', action: [ContactanosController::class, 'store'])->name('contactanos.store');

 Route::resource('cursos', CursoController::class);
// Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
// Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
// Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
// Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
// Route::get('/cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
// Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
// // Route::patch('/cursos/{curso}', [CursoController::class, 'update']);
// Route::delete('/cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
