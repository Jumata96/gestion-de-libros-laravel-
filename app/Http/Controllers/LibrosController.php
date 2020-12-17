<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;
use Auth;
use Storage;

class LibrosController extends Controller
{

    public function index()
    {

        $libros = DB::table('libro')->whereIn('estado',[1,2])->get();

        return view('forms.libros.lstLibro', [
            'libros'	=> $libros,
		]);
    }
    public function create (){
        $libro_categoria = DB::table('libro_categoria')->where('estado',1)->get();
        $libro_Editorial = DB::table('libro_Editorial')->where('estado',1)->get();

        return view('forms.libros.addLibro',[
            'libro_categoria'=>$libro_categoria,
            'libro_Editorial'=>$libro_Editorial
        ]);
    }
    public function store ( Request  $request){
        //  dd($request);

       $rules = array(
        'nombre'            => 'required',
        'ISBM'            => 'required',
        'precio'            => 'required',
        'ejemplares'            => 'required',
        'Idioma'            => 'required',
        'idCategoria'            => 'required',
        'idEditorial'            => 'required',
        );
        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        DB::table('libro')
        ->insert([
            'nombre'            => $request->nombre,
            'ISBM'              => $request->ISBM,
            'ejemplares'        => $request->ejemplares,
            'costo'             => $request->precio,
            'idioma'             => $request->Idioma,
            'paginas'           => $request->paginas,
            'libro_Editorial'   => $request->idEditorial,
            'libro_categoria'   => $request->idCategoria,
            'descripcion'       => $request->glosa,
            'fecha_creacion'    => date('Y-m-d h:m:s'),
            'estado'            => '1'

        ]);
        return response()->json("conforme");

    }
    public function show($id){

        $libro_categoria = DB::table('libro_categoria')->where('estado',1)->get();
        $libro_Editorial = DB::table('libro_Editorial')->where('estado',1)->get();

         $libros = DB::table('libro')->where('codigo', $id)->get();
            //dd($areas);
            return view('forms.libros.updLibro',[
                'libro_categoria'=>$libro_categoria,
                'libro_Editorial'=>$libro_Editorial,
                'libros' =>$libros
            ]);
    }
    public function update ( Request  $request){
        // dd($request);

       $rules = array(
        'nombre'            => 'required',
        'ISBM'            => 'required',
        'precio'            => 'required',
        'ejemplares'            => 'required',
        'Idioma'            => 'required',
        'idCategoria'            => 'required',
        'idEditorial'            => 'required',
        );
        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }

        DB::table('libro')
        ->where('codigo',intval($request->libro_id))
        ->update([
            'nombre'            => $request->nombre,
            'ISBM'              => $request->ISBM,
            'ejemplares'        => $request->ejemplares,
            'costo'             => $request->precio,
            'idioma'             => $request->Idioma,
            'paginas'           => $request->paginas,
            'libro_Editorial'   => $request->idEditorial,
            'libro_categoria'   => $request->idCategoria,
            'descripcion'       => $request->glosa,
        ]);
        return response()->json("conforme");

    }
    public function destroy($id)
    {

        DB::table('libro')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '3',
        ]);
        return redirect('/lstLibros');
    }
    public function habilitar ($id){
        //dd($id);
        DB::table('libro')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '1',
        ]);
        return redirect('/lstLibros');

    }
    public function desabilitar ($id){
        DB::table('libro')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '2',
            //'color'             => 'f4f4f4'
        ]);
        return redirect('/lstLibros');

    }
}
