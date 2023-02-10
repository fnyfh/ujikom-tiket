<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeTransportasiModel extends Model
{
    use HasFactory;
    protected $table = "tipe_transportasi";
    protected $guarded = ['id_tipe_transportasi'];

    public static function getById($id){
        $nama_tipe_transportasi = TipeTransportasiModel::where('id_tipe_transportasi', $id)->first();
        return $nama_tipe_transportasi;
    }
}
