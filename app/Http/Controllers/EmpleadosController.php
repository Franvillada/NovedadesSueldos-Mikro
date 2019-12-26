<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EmpleadosImport;
use App\Exports\EmpleadosExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Empleado;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('welcome')->with('empleados',$empleados);
    }

    public function import(Request $request)
    {
       Excel::import(new EmpleadosImport(), $request->file('myFile'));
       return redirect()->route('home');
    }
    
    public function export()
    {
        return Excel::download(new EmpleadosExport, 'empleados_prueba.xlsx');
    }
}
