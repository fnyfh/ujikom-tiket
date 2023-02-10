<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenumpangModel;
use Dompdf\dompdf;
use PDF;
use App\Exports\ExportPenumpang;
use Maatwebsite\Excel\Facades\Excel;

class PenumpangController extends Controller
{
    public function index(){
        $penumpang = PenumpangModel::all();
        $data['penumpang'] = $penumpang;
        return view('penumpang.penumpang', $data);
    }

    public function delete(request $request){
        PenumpangModel::where('id_penumpang', $request->id_penumpang)->delete();
        return redirect()->route('penumpang');
    }

    public function report(Request $request)
    {
        
        $from_date=$request->from_date;
        $to_date = $request->to_date;
        
        $data['penumpang'] = PenumpangModel::whereBetween('created_at',[ $from_date,$to_date])
        ->orderBy('id_penumpang','desc')->paginate(5);
        return view('report.penumpang', $data);
        
    }
}
