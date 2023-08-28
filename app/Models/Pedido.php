<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $fillable = array (
        'cliente_id',
        'platillo_id',
        'cantidad',
        'estado',
    );
    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id','id');
    }
    public function platillo()
    {
        return $this->belongsTo(Platillo::class,'platillo_id','id');
    }
}
