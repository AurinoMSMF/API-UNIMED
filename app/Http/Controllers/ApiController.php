<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function createPaciente(Request $request){
        $paciente= new Paciente;
        $paciente->nome = $request->nome;
        $paciente->especialidade = $request->especialidade;
        $paciente->save();

        return response()->json([
            "message"=>"Paciente cadastrado com sucesso."
        ],200);
    }

    public function getTodosOsPacientes(){
        $pacientes=Paciente::get();

        return response()->json([
            "message" => "Estes são todos os pacientes cadastrados:",
            $pacientes,
        ],200);
    }

    public function getPaciente($id){
        $paciente=Paciente::find($id);
        if($paciente){
            return response()->json([
                "message" => "Paciente encontrado:",
                $paciente,
            ],200);
        } else{
            return response()->json([
                "message" => "Paciente não encontrado.",
            ],404);
        }
    }

    public function editPaciente(Request $request, $id){
        $paciente=Paciente::find($id);
        if($paciente){
            $paciente->nome=$request->nome;
            $paciente->especialidade=$request->especialidade;
            $paciente->save();
            return response()->json([
                "message" => "Cadastro de paciente alterado com sucesso:",
                $paciente,
            ],200);
        } else{
            return response()->json([
                "message" => "Paciente não encontrado.",
            ],404);
        }
    }

    public function deletePaciente($id){
        $paciente=Paciente::find($id);
        if($paciente){
            $paciente->delete();
            return response()->json([
                "message" => "Paciente deletado com sucesso.",
            ],200);
        } else{
            return response()->json([
                "message" => "Paciente não encontrado.",
            ],404);
        }
    }

}
