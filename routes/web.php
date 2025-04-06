<?php

use App\Http\Controllers\FinanceManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FinanceManagementController::class, 'getFinancialSummary']);
