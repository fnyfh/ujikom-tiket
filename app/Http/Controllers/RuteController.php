<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportasiModel;
use App\Models\RuteModel;

class RuteController extends Controller
{
    public function index(){

        $rute = RuteModel::all();
        $data['rute'] = $rute;
        return view('rute.rute', $data);
    }

    public function create(){

        $transportasi = TransportasiModel::all();
        $data['transportasi'] = $transportasi;
        return view('rute.tambah', $data);
        
    }

    public function store(request $request){
        $rute = new RuteModel();
        $rute->fill($request->except('id_rute'));
        $rute->save();
        return redirect()->route('rute');
    }

    public function update(request $request){

        $rute = RuteModel::where('id_rute', $request->id_rute)->first();
        $transportasi = TransportasiModel::all();

        $data['rute'] = $rute;
        $data['transportasi'] = $transportasi;

        return view('rute.edit', $data);
    }

    public function updated(request $request){

        RuteModel::where('id_rute', $request->id_rute)->update($request->except('id_rute', '_token'));

        return redirect()->route('rute');
    }

    public function delete(request $request){

        RuteModel::where('id_rute', $request->id_rute)->delete();
        return redirect()->route('rute');
        
    }
}
