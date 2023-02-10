<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'level';
    protected $guarded = ['id_level'];

    public static function getById($id){
        $level = LevelModel::where('id_level', $id)->first();
        return $level;
    }
}
