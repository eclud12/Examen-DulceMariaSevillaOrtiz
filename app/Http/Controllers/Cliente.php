<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use App\Http\Requests\Cliente as ClienteRequests;

class ClienteController extends Controller
{
    protected $estados;
    
        public function __construct (Cliente $clientes){
            $this->clientes =$clientes;
        }
    
    
        public function index()
        {
            //
            $clientes = Cliente::all();
            
            //retorna el array en formato json
         return response()->json(['Cliente'=> $clientes]);
            return $clientes;
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(ClienteRequests $request)
        {
            //
          return $request;
            $clientes =$this->clientes->create($request->all());
    
            return response()->json($clientes); 
           // return $clientes;
          //  return response()->json(new Cliente($clientes), 201);
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $clientes = Cliente::find($id);
            return $clientes;
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(ClienteRequests $request, Cliente $clientes)
        {
            //
            //return $request;
            $clientes->update($request->all());
    
            return response()->json($clientes);
    
           // return response()->json(new ClienteRequests($post));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Cliente $clientes)
        {
            //
    
            $clientes ->delete();
            return response()->json('Eliminacion');
        }
}
