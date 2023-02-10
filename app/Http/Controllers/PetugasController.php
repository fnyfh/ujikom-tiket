<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasModel;
use App\Models\LevelModel;

class PetugasController extends Controller
{

    public function index(){

        $petugas = PetugasModel::all();
        $data['petugas'] = $petugas;
        return view('petugas.petugas', $data);
    }

    public function create(){

        $level = LevelModel::all();
        $data['level'] = $level;
        return view('petugas.tambah', $data);
        
    }

    public function store(request $request){

        $petugas = new PetugasModel();
        $petugas->fill($request->except('id_petugas'));
        $petugas->save();
        return redirect()->route('petugas');
    }

    public function update(request $request){

        $petugas = PetugasModel::where('id_petugas', $request->id_petugas)->first();
        $level = LevelModel::all();

        $data['petugas'] = $petugas;
        $data['level'] = $level;

        return view('petugas.edit', $data);
    }

    public function updated(request $request){

        PetugasModel::where('id_petugas', $request->id_petugas)->update($request->except('id_petugas', '_token'));

        return redirect()->route('petugas');
    }

    public function delete(request $request){

        PetugasModel::where('id_petugas', $request->id_petugas)->delete();
        return redirect()->route('petugas');
        
    }
}