<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

use App\Http\Requests\Producto as ProductoRequests;

class ProductoController extends Controller
{
    protected $productos;
    
        public function __construct (Producto $productos){
            $this->productos =$productos;
        }
    
    
        public function index()
        {
            //
            $productos = Producto::all();
            
            //retorna el array en formato json
         return response()->json(['Producto'=> $productos]);
            return $productos;
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
        public function store(ProductoRequests $request)
        {
            //
          return $request;
            $productos =$this->productos->create($request->all());
    
            return response()->json($productos); 
           // return $productos;
          //  return response()->json(new Producto($productos), 201);
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $productos = Producto::find($id);
            return $productos;
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
        public function update(ProductoRequests $request, Producto $productos)
        {
            //
            //return $request;
            $productos->update($request->all());
    
            return response()->json($productos);
    
           // return response()->json(new productosRequests($post));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Producto $productos)
        {
            //
    
            $productos ->delete();
            return response()->json('Eliminacion');
        }
}
