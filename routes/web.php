<?php

use App\Http\Controllers\FinanceManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FinanceManagementController::class, 'getFinancialSummary']);
Route::post('add-income', [FinanceManagementController::class, 'addIncome'])->name('add-income');
Route::post('add-expense', [FinanceManagementController::class, 'addExpense'])->name('add-expense');
