<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuteModel extends Model
{
    use HasFactory;

    protected $table = "rute";
    protected $guarded = ['id_rute'];
}
