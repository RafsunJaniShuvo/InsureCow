<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;



class ExcelController extends Controller
{
    public function importExportView()
    {
        return view('import');
    }

    public function export()
    {
        return Excel::download(new UserExport,'users.xlsx');
    }

    public function import()
    {
         Excel::import(new UserImport,request()->file('file'));
        return back();
    }
}
