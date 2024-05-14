<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FootballController;

Route::get('/', [FootballController::class, 'index'])->name('dashboard');
Route::get('/league-teams/{leagueId}', [FootballController::class, 'teams'])->name('teams');
Route::get('/statistics/{match_id}', [FootballController::class, 'statistics'])->name('statistics');