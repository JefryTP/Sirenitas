<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = array (
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'telefono',
    );
    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];
    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }
}
