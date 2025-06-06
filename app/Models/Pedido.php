<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoFactory> */
    use HasFactory;

    protected $fillable = ['cantidad', 'user_id', 'mueble_id'];

    public function mueble(){
        return $this->belongsTo(Mueble::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
