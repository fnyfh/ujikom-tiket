<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalModel extends Model
{
    use HasFactory;
    public static function getLevel($id_level)
    {
        $level = LevelModel::where('id_level', $id_level)->first();
        return $level->nama_level;
    }
}
