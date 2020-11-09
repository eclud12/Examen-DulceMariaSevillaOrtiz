<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Detallefactura;

use App\Http\Requests\Detallefactura as DetallefacturaRequests;

class DetallefacturaController extends Controller
{
    protected $detallefacturas;
    
        public function __construct (Detallefactura $detallefacturas){
            $this->detallefacturas =$detallefacturas;
        }
    
    
        public function index()
        {
            //
            $detallefacturas = Detallefactura::all();
            
            //retorna el array en formato json
         return response()->json(['Detallefactura'=> $detallefacturas]);
            return $detallefacturas;
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
        public function store(DetallefacturaRequests $request)
        {
            //
          return $request;
            $detallefacturas =$this->detallefacturas->create($request->all());
    
            return response()->json($detallefacturas); 
           // return $detallefacturas;
          //  return response()->json(new Detallefactura($detallefacturas), 201);
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $detallefacturas = Detallefactura::find($id);
            return $detallefacturas;
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
        public function update(DetallefacturaRequests $request, Detallefactura $detallefacturas)
        {
            //
            //return $request;
            $detallefacturas->update($request->all());
    
            return response()->json($detallefacturas);
    
           // return response()->json(new DetallefacturaRequests($post));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Detallefactura $detallefacturas)
        {
            //
    
            $detallefacturas ->delete();
            return response()->json('Eliminacion');
        }
}
