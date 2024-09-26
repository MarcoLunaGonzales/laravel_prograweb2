<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ['fecha','cliente'];

    public function detalles(){
        return $this->hasMany(VentaDetalle::class);
    }
}
