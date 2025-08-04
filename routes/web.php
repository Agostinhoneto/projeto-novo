<?php
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\AnamneseController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\EvolucaoController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*
Route::middleware(['auth'])->group(function () {
    Route::resource('alunos', AlunosController::class);
    Route::resource('anamnese', AnamneseController::class)->names('anamnese');
    Route::resource('avaliacoes', AvaliacaoController::class)->names('avaliacoes');
    Route::resource('evolucao', EvolucaoController::class)->names('evolucao');
    //funcionarios
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('planos', PlanoController::class);
    Route::resource('matriculas', MatriculaController::class);
    Route::resource('users', UserController::class);
    Route::resource('professores', ProfessorController::class)->names('professores');
    Route::resource('exercicios', ExercicioController::class)->names('exercicios');
    //Treinos
    Route::resource('treinos', TreinoController::class)->names('treinos');
    //Relatorios
    Route::get('relatorios', [RelatorioController::class, 'index'])->name('relatorios.index');
    Route::get('/relatorios/usuarios', [RelatorioController::class, 'usuarios'])->name('relatorios.usuarios');
    Route::get('/relatorios/treinos/{id}', [RelatorioController::class, 'relatoriosTreinos'])->name('relatorios.treinos');
    Route::get('/relatorios/treinos/excel/{id}', [RelatorioController::class, 'relatoriosTreinosExcel'])->name('relatorios.treinos.excel');
});

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard')->middleware('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/