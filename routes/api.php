<?php

use App\Http\Controllers\FinanceManagementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('add-income', [FinanceManagementController::class, 'addIncome']);
Route::post('deduct-expense', [FinanceManagementController::class, 'deductExpense']);
Route::get('get-financial-summary', [FinanceManagementController::class, 'getFinancialSummary']);
