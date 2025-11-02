<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MagazijnModel extends Model
{
    public function sp_getAllMagazijnen()
    {
        return DB::select('CALL SP_GetAllMagazijnen');
    }

    public function sp_GetLeverancierPerProduct($id){
        return DB::select('CALL sp_GetLeverancierPerProduct(:id)',
        ['id' => $id]);
    }

    public function sp_GetAllergeenPerProduct($id){
        return DB::select('CALL sp_GetAllergeenPerProduct(:id)',
        ['id' => $id]);
    }
}
