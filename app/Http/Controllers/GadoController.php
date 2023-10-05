<?php

namespace App\Http\Controllers;

use App\Models\Abate;
use App\Models\Gado;
use Illuminate\Http\Request;

class GadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        return response()->json(
            Gado::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $obj = Gado::create([
                'codigo'=>231,
                'qtd_leite'=>12.3,
                'qtd_racao'=>12.3,
                'peso'=>12.3,
                'nascimento'=>'2023-10-04'
            ]);

            return response()->json([
                'success' => true,
                'data' => $obj
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Não foi possível salvar o gado! Verifique as informações e tente novamente',
                'data' => []
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gado = Gado::find($id);

        if (empty($gado)) {
            return response()->json([
                'message' => 'Record not found.'
            ], 404);
        }

        return response()->json(
            $gado
        );
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gado::where('id', $id)->update(
            $request->all()
        );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gado::destroy($id);

    }
}
