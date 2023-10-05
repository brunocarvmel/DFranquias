<?php

namespace App\Http\Controllers;

use App\Models\Abate;
use Illuminate\Http\Request;

class AbateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            Abate::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $abate = Abate::create([
                'id_gado'=>11
            ]);

            return response()->json([
                'success' => true,
                'data' => $abate
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Não foi possível salvar o abate! Verifique as informações e tente novamente',
                'data' => []
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $abate = Abate::find($id);

        if (empty($abate)) {
            return response()->json([
                'message' => 'Record not found.',
            ], 404);
        }

        return response()->json(
            $abate
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abate = Abate::find($id);
        if (empty($abate)) {
            return response()->json([
                'message' => 'Record not found.',
            ], 404);
        }
        
        $abate->delete();
        return response()->json([
            'succes' => true,
            'data' => $abate
        ]);
    }
}
