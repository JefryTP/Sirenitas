<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reserva';
    protected $fillable = array (
        'cliente_id',
        'fecha',
        'hora',
        'num_personas',
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
}
