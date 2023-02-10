<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportasiModel;
use App\Models\TipeTransportasiModel;

class TransportasiController extends Controller
{
    public function index(){
        $transportasi = TransportasiModel::all();
        $data['transportasi'] = $transportasi;
        return view ('transportasi.transportasi', $data);
    }

    public function create(){
        $nama_tipe_transportasi = TipeTransportasiModel::all();
        $data['nama_tipe_transportasi'] = $nama_tipe_transportasi;
        return view ('transportasi.tambah', $data);
    }

    public function store(request $request){
        $transportasi = new TransportasiModel();
        $transportasi->fill($request->except('id_transportasi'));
        $transportasi->save();
        return redirect()->route('transportasi');
    }

    public function update(request $request){
        $transportasi = TransportasiModel::where('id_transportasi', $request->id_transportasi)->first();
        $tipe_transportasi = TipeTransportasiModel::all();

        $data['transportasi'] = $transportasi;
        $data['tipe_transportasi'] = $tipe_transportasi;

        return view ('transportasi.edit', $data);
    }

    public function updated(request $request){
        TransportasiModel::where('id_transportasi', $request->id_transportasi)->update($request->except('id_transportasi', '_token'));

        return redirect()->route('transportasi');
    }

    public function delete(request $request){
        TransportasiModel::where('id_transportasi', $request->id_transportasi)->delete();
        return redirect()->route('transportasi');
    }
}
