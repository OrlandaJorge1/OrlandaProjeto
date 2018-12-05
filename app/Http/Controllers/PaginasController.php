<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel\Paciente;

class PaginasController extends Controller
{

    private $paciente;
    public function __construct(Paciente $paciente){

        $this->paciente = $paciente;
    }
    public function index(){
        return view ('paginas.pacientes.index');
    }

    public function cadastro(){
        return view ('paginas.pacientes.cadastro');
      //  return view ('paginas.pacientes.create');

    }

    public function cadastrados(Paciente $paciente){
       $pacientes = $paciente->all();
        return view ('paginas.pacientes.cadastrados',compact('pacientes'));
       
    }
    public function store(Request $request){
     // dd($request ->all());

     $dataForm = $request->except('_token');
     $insert = $this->paciente->insert($dataForm);
     if ($insert)
     return redirect('cadastrados');
     else 
     return redirect()->back();

   
    }

   



}
