<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $table = 'platillo';
    protected $fillable = array (
        'nombre',
        'descripcion',
        'precio',
    );
    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];
    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }
}
