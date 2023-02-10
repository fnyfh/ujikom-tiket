<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RuteModel;

class PemesananController extends Controller
{
    public function index(){
        return view ('pemesanan.pemesanan');
    }
    
}
