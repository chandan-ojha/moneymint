<?php
namespace App\Http\Controllers;

use App\Http\Requests\ExpenseRequest;
use App\Http\Requests\IncomeRequest;
use App\Models\Expense;
use App\Models\Income;
use Exception;

class FinanceManagementController extends BaseController
{
    /**
     * Get the financial summary
     */
    public function getFinancialSummary()
    {
        try {
            $totalIncome    = Income::sum('amount');
            $totalExpenses  = Expense::sum('amount');
            $dailyExpenses  = Expense::whereDate('created_at', today())->sum('amount');
            $currentBalance = $totalIncome - $totalExpenses;
            $expenses       = Expense::orderBy('created_at', 'desc')->paginate(10);

            return view('app', compact('totalIncome', 'totalExpenses', 'dailyExpenses', 'currentBalance', 'expenses'));

        } catch (Exception $e) {
            return view('error', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Add a new income record
     */
    public function addIncome(IncomeRequest $request)
    {
        try {
            Income::create($request->validated());

            // Return a response based on the request type
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Income added successfully'], 201);
            }
            return redirect()->back()->with('success', 'Income added successfully');

        } catch (Exception $e) {
            if ($request->wantsJson()) {
                return $this->errorResponse($e->getMessage(), 500);
            }

            return redirect()->back()->with('error', 'An error occurred while adding income');
        }

    }

    /**
     * Add a new expense record
     */
    public function addExpense(ExpenseRequest $request)
    {
        try {
            Expense::create($request->validated());

            // Return a response based on the request type
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Expense added successfully'], 201);
            }
            return redirect()->back()->with('success', 'Expense added successfully');

        } catch (Exception $e) {
            if ($request->wantsJson()) {
                return $this->errorResponse($e->getMessage(), 500);
            }

            return redirect()->back()->with('error', 'An error occurred while adding expense');
        }
    }

}
