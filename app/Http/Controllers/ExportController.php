<?php

namespace App\Http\Controllers;

use App\Exports\CustomerExport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function CustomerExport(){
        return Excel::download(new CustomerExport,'customers.xlsx');
    }
    public function CustomerExportPdf(){
        return Excel::download(new CustomerExport,'customers.pdf');
    }
    public function CustomerExportPdfhtml(){
        $n['datas'] = User::where('role_id',null)->get();
        return view('exports.customer',$n);
    }
}
