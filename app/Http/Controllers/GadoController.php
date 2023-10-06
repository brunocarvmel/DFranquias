<?php

namespace App\Http\Controllers;

use App\Services\GadoService;
use Illuminate\Http\Request;

class GadoController extends Controller
{

    private $gadoService;

    public function __construct(){
        $this->gadoService = new GadoService();
    }

    public function index()
    {
        return $this->gadoService->index();
    }

    public function store(Request $request)
    {
        return $this->gadoService->store($request);
    }

    public function show(string $id)
    {     
        return $this->gadoService->show($id);
    }

    public function update(Request $request, string $id)
    {
        return $this->gadoService->update($request, $id);
    }

    public function destroy(string $id)
    {   
        return $this->gadoService->destroy($id);
    }
}
