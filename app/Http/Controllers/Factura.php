<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Factura;

use App\Http\Requests\Factura as FacturaRequests;

class FacturaController extends Controller
{
    protected $facturas;
    
        public function __construct (Factura $facturas){
            $this->facturas =$facturas;
        }
    
    
        public function index()
        {
            //
            $facturas = Factura::all();
            
            //retorna el array en formato json
         return response()->json(['Factura'=> $facturas]);
            return $facturas;
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
        public function store(FacturaRequests $request)
        {
            //
          return $request;
            $facturas =$this->facturas->create($request->all());
    
            return response()->json($facturas); 
           // return $facturas;
          //  return response()->json(new Factura($facturas), 201);
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $factura
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $facturas = Factura::find($id);
            return $facturas;
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
        public function update(FacturaRequests $request, Factura $facturas)
        {
            //
            //return $request;
            $facturas->update($request->all());
    
            return response()->json($facturas);
    
           // return response()->json(new FacturaRequests($post));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Factura $facturas)
        {
            //
    
            $facturas ->delete();
            return response()->json('Eliminacion');
        }
}
