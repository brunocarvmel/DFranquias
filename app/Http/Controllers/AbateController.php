<?php

namespace App\Http\Controllers;

use App\Models\Abate;
use App\Services\AbateService;
use Illuminate\Http\Request;

class AbateController extends Controller
{
    
    private $abateService;

    public function __construct(){
        $this->abateService = new AbateService();
    }

    public function index()
    {
        return $this->abateService->index();   
    }

    public function store(Request $request)
    {
        return $this->abateService->store($request);
    }

    public function show(string $id)
    {
        $this->abateService->show($id);
    }

    public function destroy(string $id)
    {
        $this->abateService->destroy($id);
    }
}
