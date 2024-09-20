<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstagioController;

Route::redirect('/', '/login');

Route::middleware('auth')->group(function(){ 

    Route::get('/curso-listagem', [ CursoController::class, 'index' ])
    #->middleware('permission:curso_listar')
    ->name('curso.listagem');

    Route::get('/curso-cadastro', [ CursoController::class, 'create' ])
    #->middleware('permission:curso_cadastrar')
    ->name('curso.cadastro');

    Route::post('/curso-salvar',  [ CursoController::class, 'store' ])
    #->middleware('permission:curso_cadastrar')
    ->name('curso.salvar');

    Route::get('/curso-alterar/{id}',  [ CursoController::class, 'edit' ])
    #->middleware('permission:curso_alterar')
    ->name('curso.alterar');

    Route::put('/curso-atualizar/{id}',  [ CursoController::class, 'update' ])
    #->middleware('permission:curso_alterar')
    ->name('curso.atualizar');

    Route::get('/curso-deletar/{id}',  [ CursoController::class, 'destroy' ])
    #->middleware('permission:curso_deletar')
    ->name('curso.deletar');

});

Route::middleware('auth')->group(function(){ 

    Route::get('/estagio', [App\Http\Controllers\EstagioController::class, 'index'])
    ->name('estagio');

    Route::get('/estagio-cadastro', [ EstagioController::class, 'create' ])
    #->middleware('permission:estagio_cadastrar')
    ->name('estagio.cadastro');

    Route::post('/estagio-salvar',  [ EstagioController::class, 'store' ])
    #->middleware('permission:estagio_cadastrar')
    ->name('estagio.salvar');

    Route::get('/estagio-alterar/{id}',  [ EstagioController::class, 'edit' ])
    #->middleware('permission:estagio_alterar')
    ->name('estagio.alterar');

    Route::put('/estagio-atualizar/{id}',  [ EstagioController::class, 'update' ])
    #->middleware('permission:estagio_alterar')
    ->name('estagio.atualizar');

    Route::get('/estagio-deletar/{id}',  [ EstagioController::class, 'destroy' ])
    #->middleware('permission:estagio_deletar')
    ->name('estagio.deletar');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
