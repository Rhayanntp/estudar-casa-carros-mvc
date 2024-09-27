<?php

namespace App\Service;

use App\Models\CarrosModel;

class CarrosService
{
    public function create(array $dados)
    {
        $user = CarrosModel::create([
            'carro' => $dados['carro'],
            'placa' => $dados['placa'],
            'modelo' => $dados['modelo'],
            'ano' => $dados['ano'],
            'valor' => $dados['valor'],
            'marca'=> $dados['marca'],
            'tipo'=> $dados['tipo']
        ]);

        return $user;
    }

    public function getAll()
    {
        $carros = CarrosModel::All();

        return [
            'status' =>true,
            'message' => 'Pesquisa efetuada com sucesso',
            'data' => $carros
        ];
    } 
        
    public function update(array $dados)
    {
        $carros = CarrosModel::find($dados['id']);

        
        if ($carros == null) {
            return [
                'status' => false,
                'message' => 'cadastro não existe'
            ];
        }

        if (isset($dados['carro'])) {
            $carros->carro = $dados['carro'];
        }

        if (isset($dados['placa'])) {
            $carros->placa = $dados['placa'];
        }

        if (isset($dados['modelo'])) {
            $carros->modelo = $dados['modelo'];
        }

        if (isset($dados['ano'])) {
            $carros->ano = $dados['ano'];
        }

        if (isset($dados['valor'])) {
            $carros->valor = $dados ['valor'];
        }

        if (isset($dados['tipo'])) {
            $carros->tipo = $dados ['tipo'];
        }

        if (isset($dados['marca'])) {
            $carros->marca = $dados ['marca'];
        }

        $carros->save();
        
        return [
            'atatus' => true,
            'message' => 'Atualizado com sucesso'
        ];
    }

    public function delete($id)
    {
        $carros = CarrosModel::find($id);

        if ($carros == null) {
            return [
                'status' => false,
                'message' => 'cadastro não existe'
            ];
        }

        $carros->delete();

        return [
            'status' => true,
            'message' => 'cadastro excluido com sucesso'
        ];
    }

    public function findById($id)
    {
        $carros = CarrosModel::find($id);

        if($carros == null){
            return [
                'status' => false,
                'message' => 'carro não encontrado'
            ]; 
        }

        return [ 
            'status' => true, 
            'message' => 'ID encontrado com sucesso', 
            'data' => $carros
        ];
    }

    public function searchByPlaca ($placa)
    {
        $carros = CarrosModel::where('placa', 'like', '%' . $placa . '%')->get();

        if($carros == null){
            return [
                'status' => false,
                'message' => 'placa não encontrada'
            ]; 
        }

        return [ 
            'status' => true, 
            'message' => 'placa encontrada com sucesso', 
            'data' => $carros
        ];
    }

    public function searchByAno ($ano)
    {
        $carros = CarrosModel::where('ano', '=',  $ano )->get();

        if($carros == null){
            return [
                'status' => false,
                'message' => 'ano não encontrada'
            ]; 
        }

        return [ 
            'status' => true, 
            'message' => 'ano encontrada com sucesso', 
            'data' => $carros
        ];
    }

    public function searchByTipo ($tipo)
    {
        $carros = CarrosModel::where('tipo', 'like', '%' . $tipo . '%')->get();

        if($carros == null){
            return [
                'status' => false,
                'message' => 'tipo não encontrado'
            ]; 
        }

        return [ 
            'status' => true, 
            'message' => 'tipo encontrado com sucesso', 
            'data' => $carros
        ];
    }

    public function searchByMarca ($marca)
    {
        $carros = CarrosModel::where('marca', 'like', '%' . $marca . '%')->get();

        if($carros == null){
            return [
                'status' => false,
                'message' => 'marca não encontrada'
            ]; 
        }

        return [ 
            'status' => true, 
            'message' => 'marca encontrada com sucesso', 
            'data' => $carros
        ];
    }

    public function searchByValor($valor)
    {
        $carros = CarrosModel::where('valor', '>=', $valor)->get();

        if($carros == null){
            return [
                'status' => false,
                'message' => 'valor não encontrado'
            ]; 
        }

        return [ 
            'status' => true, 
            'message' => 'valor encontrado com sucesso', 
            'data' => $carros
        ];
    }
}