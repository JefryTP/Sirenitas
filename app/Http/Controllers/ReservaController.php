<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
    
            $cliente = Cliente::where('correo', $request->email)->first();
    
            if (!$cliente) {
                $cliente = Cliente::create([
                    'nombre' => $request->name,
                    'apellido_paterno' => $request->ape_pat,
                    'apellido_materno' => $request->ape_mat,
                    'correo' => $request->email,
                    'telefono' => $request->phone,
                ]);
            }
    
            Reserva::create([
                'cliente_id' => $cliente->id,
                'fecha' => $request->fecha,
                'hora' => $request->hora,
                'num_personas' => $request->num_persona,
                'estado' => 'Pendiente',
            ]);
    
            DB::commit();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }
}
