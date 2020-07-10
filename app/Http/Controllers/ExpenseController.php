<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\ExpenseReport;

class ExpenseController extends Controller
{
    public function create(ExpenseReport $expenseReport){
        return view("expense.create",compact('expenseReport'));
    }

    public function store(Request $request , ExpenseReport $expenseReport){
        
        $request->validate([
            "description" => "required|min:3",
            "amount"      =>  "numeric"
        ]);

        $expense = Expense::create([
            "expense_report_id" => $expenseReport->id 
        ] + $request->all()); 

        $expense->save();

        return redirect()
            ->route("expenseReport.show",$expenseReport->id)
            ->with("status","Creado con Exito !");

    }

    public function edit(ExpenseReport $expenseReport,Expense $expense){
        //$expenseReport = ExpenseReport::findOrFail($expenseReport);
        //$expense = Expense::findOrFail($expense);
      
        return view("expense.edit",compact('expenseReport','expense'));
    }
}
