<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseReport;
use App\Expense;
use App\Mail\SummaryReport;
use Illuminate\Support\Facades\Mail;


class ExpenseReportController extends Controller
{
    
    public function index(){
       
        return view("expenseReport.index",[
            "expenseReports" => ExpenseReport::all()
        ])  ;
    }

    public function create(){
        return view("expenseReport.create");
    }

    public function store(Request $request){
        $request->validate([
            "title" => "required|min:3",
            "name" => "required|min:3"
            ]);

        $report = ExpenseReport::create($request->all());

        $report->save();
        
        return redirect()->route("expenseReport.index")
            ->with("status","Creado con Exito !");
    }

    public function show($id){
        
        $report = ExpenseReport::findOrFail($id);
        
        return view("expenseReport.show",compact('report'));

    }

    public function edit($id){
        $report = ExpenseReport::findOrFail($id);

        return view("expenseReport.edit",compact('report'));
    }

    public function update(Request $request, $id){
        $report = ExpenseReport::findOrFail($id);
        $report->title = $request->get("title");
        $report->name = $request->get("name");

        $report->save();

        return redirect()->route("expenseReport.index")
            ->with("status","Actualizado con Exito !");
    }

    public function destroy($id){
        $report = ExpenseReport::findOrFail($id);

        $report->delete();

        return back()->with("status","Eliminado Exitosamente!");
    }

    public function confirmSendMail(ExpenseReport $expenseReport){
        return view("expenseReport.confirmSendMail",compact('expenseReport'));
    }

    public function sendMail(Request $request, ExpenseReport $expenseReport){
        Mail::to($request->get("email"))->send(new SummaryReport($expenseReport));

        return redirect()
        ->route("expenseReport.show",$expenseReport)
        ->with("status","Reporte Enviado Exitosamente");
    }
}

