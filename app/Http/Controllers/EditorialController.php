<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;
use Storage;


class EditorialController extends Controller
{
    public function index()
    {

        $Editoriales = DB::table('libro_Editorial')->whereIn('estado',[1,2])->get();

        return view('forms.libros_editorial.lstEditorial', [
            'Editoriales'	=> $Editoriales,
		]);
    }
    public function create (){
        return view('forms.libros_editorial.addEditorial');
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
        DB::table('libro_Editorial')
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

         $Editoriales = DB::table('libro_Editorial')->where('codigo', $id)->get();
            //dd($areas);
            return view('forms.libros_editorial.updEditorial',[
                'Editoriales' =>$Editoriales
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

        DB::table('libro_Editorial')
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

        DB::table('libro_Editorial')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '3',
        ]);
        return redirect('/lstEditoriales');
    }
    public function habilitar ($id){
        //dd($id);
        DB::table('libro_Editorial')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '1',
        ]);
        return redirect('/lstEditoriales');

    }
    public function desabilitar ($id){
        DB::table('libro_Editorial')
        ->where('codigo',intval($id))
        ->update([
            'estado'            => '2',
            //'color'             => 'f4f4f4'
        ]);
        return redirect('/lstEditoriales');

    }
}
