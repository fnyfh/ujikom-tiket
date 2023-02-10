<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportasiModel extends Model
{
    use HasFactory;

    protected $table = "transportasi";
    protected $guarded = ['id_transportasi'];

    public static function getById($id){
        $transportasi = TransportasiModel::where('id_transportasi', $id)->first();
        return $transportasi;
    }
}
