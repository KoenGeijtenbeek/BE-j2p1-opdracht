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

    // sp_GetLeverancierPerProduct


    // sp_GetAllergeenPerProduct
}
