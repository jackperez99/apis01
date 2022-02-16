<?php
namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    function obtenerLista(){
        $clientes = Cliente::all();

        $response = new \stdClass();
        $response -> success = true;
        $response -> data = $clientes;

        return response()->json($response,200);
    }
    function obtenerItem($id){
        $cliente = Cliente::find($id);

        $response = new \stdClass();
        $response -> success = true;
        $response -> data = $cliente;

        return response()->json($response,200);
    }

    function udpate(Request $request){
        $cliente = Cliente::find($request->id);

        if($cliente)
        {
            $cliente -> codigo = $request->codigo;
            $cliente -> nombres = $request->nombres;
            $cliente -> apellidos = $request->apellidos;
            $cliente -> pais = $request->pais;
            $cliente -> direccion = $request->direccion;
            $cliente -> distrito = $request->distrito;
            $cliente -> celular = $request->celular;
            $cliente -> correo = $request->correo;
            $cliente -> comprobante = $request->comprobante;
            $cliente -> numdocumento = $request->numdocumento;
            $cliente -> descripcion = $request->descripcion;
            $cliente -> save(); 
        }

        $response = new \stdClass();
        $response -> success = true;
        $response -> data = $cliente;

        return response()->json($response,200);
    }

    function patch(Request $request){
        $cliente = Cliente::find($request->id);

        if($cliente)
        {
            if($cliente){
                if(isset($request->codigo))
                $cliente -> codigo = $request->codigo;

                if(isset($request->nombres))
                $cliente -> nombres = $request->nombres;
                
                if(isset($request->apellidos))
                $cliente -> apellidos = $request->apellidos;
                
                if(isset($request->pais))
                $cliente -> pais = $request->pais;
                
                if(isset($request->direccion))
                $cliente -> direccion = $request->direccion;
                
                if(isset($request->distrito))
                $cliente -> distrito = $request->distrito;

                if(isset($request->celular))
                $cliente -> celular = $request->celular;

                if(isset($request->correo))
                $cliente -> correo = $request->correo;

                if(isset($request->comprobante))
                $cliente -> comprobante = $request->comprobante;

                if(isset($request->numdocumento))
                $cliente -> numdocumento = $request->numdocumento;

                if(isset($request->descripcion))
                $cliente -> descripcion = $request->descripcion;
                
                $cliente -> save();                 
            }               
        }

        $response = new \stdClass();
        $response -> success = true;
        $response -> data = $cliente;

        return response()->json($response,200);
    }

    function storage(Request $request){

        $cliente = new Cliente();

        $cliente -> codigo = $request->codigo;
        $cliente -> nombres = $request->nombres;
        $cliente -> apellidos = $request->apellidos;
        $cliente -> pais = $request->pais;
        $cliente -> direccion = $request->direccion;
        $cliente -> distrito = $request->distrito;
        $cliente -> celular = $request->celular;
        $cliente -> correo = $request->correo;
        $cliente -> comprobante = $request->comprobante;
        $cliente -> numdocumento = $request->numdocumento;
        $cliente -> descripcion = $request->descripcion;
        $cliente->save();

        $response = new \stdClass();
        $response -> success = true;
        $response -> data = $cliente;

        return response()->json($response,200);
    }

    function delete($id){
        $response = new \stdClass();
        $response -> success = true;
        $response_code = 200;

        $cliente = Cliente::find($id);

        if($cliente){
            $cliente->delete();
            $response -> success = true;
            $response_code = 200;
        }else{
            $response -> error= ["el elemento ya ha sido eliminado"];
            $response->success = false;
            $response_code = 500;
        }


        return response()->json($response,200);
    }
}