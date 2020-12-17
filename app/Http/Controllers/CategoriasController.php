<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;
use Storage;


class CategoriasController extends Controller
{
    public function index()
    {

        $categorias = DB::table('libro_categoria')->whereIn('estado',[1,2])->get();

        return view('forms.libros_categoria.lstCategoria', [
            'categorias'	=> $categorias,
		]);
    }
    public function create (){
        return view('forms.libros_categoria.addCategoria');
    }
    public function store ( Request  $request){
        // dd($request);

       $rules = array(
        'nombre'            => 'required',
        'dsCorta'            => 'required',
        );
        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        DB::table('libro_categoria')
        ->insert([
            'nombre'            => $request->nombre,
            'descripcion'       => $request->glosa,
            'dsc_corta'         => $request->dsCorta,
            'fecha_creacion'    => date('Y-m-d h:m:s'),
            'estado'            => '1'

        ]);
        return response()->json("conforme");

    }
    public function show($id){

        $categorias = DB::table('libro_categoria')->where('estado',intval($id))->get();

            //dd($areas);
            return view('forms.libros_categoria.updCategoria',[
                'categorias' =>$categorias
            ]);
    }
    public function update ( Request  $request){
        // dd($request);

       $rules = array(
        'nombre'            => 'required',
        'dsCorta'            => 'required',
        );
        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }

        DB::table('libro_categoria')
        ->where('codigo',intval($request->codigo))
        ->update([
            'descripcion'       => $request->glosa,
            'nombre'            => $request->nombre,
            'dsc_corta'         => $request->dsCorta,
            'fecha_creacion'    => date('Y-m-d h:m:s'),
        ]);
        return response()->json("conforme");

    }
    public function destroy($id)
    {

        DB::table('libro_categoria')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '3',
        ]);
        return redirect('/lstCategorias');
    }
    public function habilitar ($id){
        //dd($id);
        DB::table('libro_categoria')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '1',
        ]);
        return redirect('/lstCategorias');

    }
    public function desabilitar ($id){
        DB::table('libro_categoria')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '2',
            //'color'             => 'f4f4f4'
        ]);
        return redirect('/lstCategorias');

    }
}
