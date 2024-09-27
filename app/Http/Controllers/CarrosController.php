<?php

namespace App\Http\Controllers;

use App\Service\CarrosService;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    protected $carrosService;

    public function __construct(CarrosService $carrosService)
    {
        $this->carrosService = $carrosService;
    }

    public function store(Request $request)
    {
        $user = $this->carrosService->create($request->all());

        return response()->json($user);
    }

    public function index()
    {
        $result = $this->carrosService->getAll();

        return response()->json($result);
    }

    public function update(Request $request)
    {
        $result = $this->carrosService->update($request->all());
        return response()->json($result);
    }

    public function delete($id)
    {
        $result = $this->carrosService->delete($id);

        return response()->json($result);
    }

    public function findById($id)
    {
        $result = $this->carrosService->findById($id);

        return response()->json($result);
    }

    public function searchByPlaca(Request $request)
    {
        $result = $this->carrosService->searchByPlaca($request->placa);

        return response()->json($result);
    }

    public function searchByAno(Request $request)
    {
        $result = $this->carrosService->searchByAno($request->ano);

        return response()->json($result);
    }

    public function searchByTipo(Request $request)
    {
        $result = $this->carrosService->searchByTipo($request->tipo);

        return response()->json($result);
    }

    public function searchByMarca(Request $request)
    {
        $result = $this->carrosService->searchByMarca($request->marca);

        return response()->json($result);
    }

    public function searchByValor(Request $request)
    {
        $result  = $this->carrosService->searchByValor($request->valor);

        return response()->json($result);
    }

}
