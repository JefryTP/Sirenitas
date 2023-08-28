<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Platillo;
use App\Models\Pedido;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function store(Request $request)

    {

        try {

            DB::beginTransaction();

   

            $cliente = Cliente::where('correo', $request->email)->first();

            $platillo = Platillo::where('id', $request->platillo)->first();

   

            if (!$cliente) {

                $cliente = Cliente::create([

                    'nombre' => $request->name,

                    'apellido_paterno' => $request->ape_pat,

                    'apellido_materno' => $request->ape_mat,

                    'correo' => $request->email,

                    'telefono' => $request->phone,

                ]);

            }

   

            Pedido::create([

                'cliente_id' => $cliente->id,

                'platillo_id' => $platillo->id,

                'cantidad' => $request->cantidad,

                'estado' => 'Pendiente',

            ]);

   

            DB::commit();

            return redirect()->back();

        } catch (\Exception $e) {

            DB::rollBack();

        }

    }
}
