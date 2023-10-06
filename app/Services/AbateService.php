<?php

namespace App\Services;

use App\Models\Abate;
use App\Models\Gado;
use Carbon\Carbon;

class AbateService extends Service{
    
    public function index(){
        return response()->json(
            Abate::all()
        );
    }

    public function store($request){
        try {
            $gado = Gado::find($request->id_gado);
            $idade_gado = Carbon::now()->diffInYears(Carbon::parse($gado->nascimento));
            $arroba = $gado->peso/18;
            
            if($idade_gado<=5) {
                throw new \Exception("O gado precisa ter mais de 5 anos!", 1);    
            }

            if ($gado->qtd_leite>=40) {
                throw new \Exception("O gado precisa produzir menos de 40 litros de leite por semana!", 1);    
            }

            if ($gado->qtd_leite>=70 && $gado->qtd_racao<50) {
                throw new \Exception("O gado precisa produzir menos de 70 litros de leite por semana e ingerir mais de 50 quilos de ração por dia", 1);    
            }

            if ($arroba<=18){
                throw new \Exception("O gado precisa ter um peso maior que 18 arrobas", 1);     
            }
            $abate = Abate::create(
                $request->all()
            );

            return response()->json([
                'success' => true,
                'data' => $abate
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
                'data' => []
            ]);
        } 
    }

    public function show($id){
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

    public function destroy($id){
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