<?php

namespace App\Services;

use App\Models\Gado;

class GadoService extends Service {

    public function index(){
        return response()->json(
            Gado::with('abate')->get()
        );
    }

    public function store($request){
        // return response()->json($request->all());
        try {
            $gado = Gado::create(
                $request->all()
            );

            return response()->json([
                'success'=>true,
                'data'=>$gado
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
                'data' => []
            ], 404);
        }
    }

    public function show($id){
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

    public function update($request, $id){
        $gado = Gado::find($id);

        if (empty($gado)) {
            return response()->json([
                'message'=>'Record not found.',
            ], 404);
        }

        $gado->update(
            $request->all()
        );
        return response()->json([
            'success' => true,
            'data' => $gado
        ]);
    }

    public function destroy($id){
        $gado = Gado::find($id);
        if (empty($gado)) {
            return response()->json([
                'message'=>'Record not found.',
            ], 404);
        }

        $gado->delete();
        return response()->json([
            'success'=>true,
            'data'=>$gado
        ]);
    }
}