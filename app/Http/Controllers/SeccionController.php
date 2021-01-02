<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Validator;
use Auth;
use Image;


class SeccionController extends Controller
{
     public function index01()
    {
        $inicio_seccion_det01 = DB::table('inicio_seccion_det')
                    ->where('id_seccion','SEC1')->whereIn('estado',[1,2])->get();
        //   dd($inicio_seccion_det01);
        return view('forms.Pagina_mnt.seccion1.lstSeccion01',[
            'inicio_seccion_det01' => $inicio_seccion_det01
        ]);
    }
     public function Seccion01()
    {

        return view('forms.Pagina_mnt.seccion1.addSeccion01');
    }
    public function storeSeccion01(Request $request)
    {

        //  dd($request->imagen);
        // dd($request);
         $rules = array(
                'imagenSec'     => 'required|mimes:jpg,tif,jpeg,png',
                'titulo'   => 'required',
            );
        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen =null;
         $url_imagen = Storage::disk('public')->put('imagenes2', $request->file('imagenSec'));

        DB::table('inicio_seccion_det')
        ->insert([
         'id_seccion' =>'SEC1' ,
         'titulo' =>$request->titulo,
         'descripcion' =>$request->descripcion,
         'name_file' =>$request->imagen_name,
         'url_file' =>$url_imagen,
         'fecha_creacion'    => date('Y-m-d H:m:s'),
         'estado'            => 1,


        ]);




        DB::table('inicio_seccion_det')
            ->where('codigo',$request->seccion1_codigo)
            ->update([
                'descripcion'   => $request->seccion1_descripcion,
                'fecha_creacion'    => date('Y-m-d H:m:s')
            ]);
    }
    public function showSeccion01($id)
    {
         $inicio_seccion_det01 = DB::table('inicio_seccion_det')
                    ->where('codigo',intval($id))->get();

        return view('forms.Pagina_mnt.seccion1.updSeccion01',[
            'inicio_seccion_det01' => $inicio_seccion_det01
        ]);
    }
    public function updSeccion01(Request $request)
    {

        //  dd($request->imagen);
        //  dd($request);
        if( $request->file('imagenSec')){
            $rules = array(
                'imagenSec'     => 'required|mimes:jpg,tif,jpeg,png',
                'titulo'   => 'required',
            );

        }else{
            $rules = array(
                'titulo'   => 'required',
            );
        }

        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen =null;
        $file_name =null;
        if( $request->file('imagenSec')){
            $url_imagen = Storage::disk('public')->put('imagenes', $request->file('imagenSec'));
            $file_name=$request->imagen_name;
        }else{
            $url_imagen =  $request->url_file;
            $file_name  =$request->name_file;
        }



        DB::table('inicio_seccion_det')
            ->where('codigo',$request->sec01_cod)
            ->update([
                'id_seccion' =>'SEC1' ,
                'titulo' =>$request->titulo,
                'descripcion' =>$request->descripcion,
                'name_file' =>$file_name,
                'url_file' =>$url_imagen,
                'fecha_creacion'    => date('Y-m-d H:m:s'),
                'estado'            => 1,
            ]);
    }
        public function destroy($id)
    {
        // dd($id);

            DB::table('inicio_seccion_det')
            ->where('codigo',$id)
            ->update([
                'estado'            => '3',
            ]);

        return redirect('/seccion1');
    }
    public function habilitar ($id){
        //dd($id);
        DB::table('inicio_seccion_det')
        ->where('codigo',$id)
        ->update([
            'estado'            => '1',
        ]);
        return redirect('/seccion1');

    }
    public function desabilitar ($id){
        //dd($id);
        DB::table('inicio_seccion_det')
        ->where('codigo',$id)
        ->update([
            'estado'            => '2',
        ]);
        return redirect('/seccion1');

    }
    /* seccion 02  */


    /* seccion 03  */
    public function index03()
    {
        $inicio_seccion_det03 = DB::table('inicio_seccion_det')
                    ->where('id_seccion','SEC3')->whereIn('estado',[1,2])->get();
        //   dd($inicio_seccion_det03);
        return view('forms.Pagina_mnt.seccion3.lstSeccion03',[
            'inicio_seccion_det03' => $inicio_seccion_det03
        ]);
    }
     public function Seccion03()
    {

        return view('forms.Pagina_mnt.seccion3.addSeccion03');
    }
    public function storeSeccion03(Request $request)
    {

        //  dd($request->imagen);
        // dd($request);
         $rules = array(
                'imagenSec'     => 'required|mimes:jpg,tif,jpeg,png',
                'titulo'   => 'required',
            );
        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen =null;
         $url_imagen = Storage::disk('public')->put('imagenes', $request->file('imagenSec'));

        DB::table('inicio_seccion_det')
        ->insert([
         'id_seccion' =>'SEC3' ,
         'titulo' =>$request->titulo,
         'descripcion' =>$request->descripcion,
         'name_file' =>$request->imagen_name,
         'url_file' =>$url_imagen,
         'fecha_creacion'    => date('Y-m-d H:m:s'),
         'estado'            => 1,
        ]);



    }
    public function showSeccion03($id)
    {
         $inicio_seccion_det01 = DB::table('inicio_seccion_det')
                    ->where('codigo',intval($id))->get();

        return view('forms.Pagina_mnt.seccion3.updSeccion03',[
            'inicio_seccion_det01' => $inicio_seccion_det01
        ]);
    }
    public function updSeccion03(Request $request)
    {

        //  dd($request->imagen);
        //  dd($request);
        if( $request->file('imagenSec')){
            $rules = array(
                'imagenSec'     => 'required|mimes:jpg,tif,jpeg,png',
                'titulo'   => 'required',
            );

        }else{
            $rules = array(
                'titulo'   => 'required',
            );
        }

        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen =null;
        $file_name =null;
        if( $request->file('imagenSec')){
            $url_imagen = Storage::disk('public')->put('imagenes', $request->file('imagenSec'));
            $file_name=$request->imagen_name;
        }else{
            $url_imagen =  $request->url_file;
            $file_name  =$request->name_file;
        }



        DB::table('inicio_seccion_det')
            ->where('codigo',$request->sec03_cod)
            ->update([
                'titulo' =>$request->titulo,
                'descripcion' =>$request->descripcion,
                'name_file' =>$file_name,
                'url_file' =>$url_imagen,
                'fecha_creacion'    => date('Y-m-d H:m:s'),
                'estado'            => 1,
            ]);
    }
    public function destroy_sec03($id)
    {
        // dd($id);

            DB::table('inicio_seccion_det')
            ->where('codigo',$id)
            ->update([
                'estado'            => '3',
            ]);

        return redirect('/seccion03');
    }
    public function habilitar_sec03 ($id){
        //dd($id);
        DB::table('inicio_seccion_det')
        ->where('codigo',$id)
        ->update([
            'estado'            => '1',
        ]);
        return redirect('/seccion03');

    }
    public function desabilitar_sec03 ($id){
        //dd($id);
        DB::table('inicio_seccion_det')
        ->where('codigo',$id)
        ->update([
            'estado'            => '2',
        ]);
        return redirect('/seccion03');

    }
    /* seccion 04  */
    public function index04()
    {
        $inicio_seccion_det04 = DB::table('inicio_seccion_det')
                    ->where('id_seccion','SEC4')->whereIn('estado',[1,2])->get();
        //   dd($inicio_seccion_det03);
        return view('forms.Pagina_mnt.seccion4.lstSeccion04',[
            'inicio_seccion_det04' => $inicio_seccion_det04
        ]);
    }
     public function Seccion04()
    {
        return view('forms.Pagina_mnt.seccion4.addSeccion04');
    }
    public function storeSeccion04(Request $request)
    {

        //  dd($request->imagen);
        // dd($request);
         $rules = array(
                'imagenSec'     => 'required|mimes:jpg,tif,jpeg,png',
                'titulo'   => 'required',
            );
        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen =null;
         $url_imagen = Storage::disk('public')->put('imagenes', $request->file('imagenSec'));

        DB::table('inicio_seccion_det')
        ->insert([
         'id_seccion' =>'SEC4' ,
         'titulo' =>$request->titulo,
         'descripcion' =>$request->descripcion,
         'glosa'       =>$request->glosa,
         'name_file'   =>$request->imagen_name,
         'url_file'   =>$url_imagen,
         'fecha_creacion'    => date('Y-m-d H:m:s'),
         'estado'            => 1,
        ]);



    }
    public function showSeccion04($id)
    {
         $inicio_seccion_det04 = DB::table('inicio_seccion_det')
                    ->where('codigo',intval($id))->get();

        return view('forms.Pagina_mnt.seccion4.updSeccion04',[
            'inicio_seccion_det04' => $inicio_seccion_det04
        ]);
    }
    public function updSeccion04(Request $request)
    {

        //  dd($request->imagen);
        //    dd($request);
        if( $request->file('imagenSec')){
            $rules = array(
                'imagenSec'     => 'required|mimes:jpg,tif,jpeg,png',
                'titulo'   => 'required',
            );

        }else{
            $rules = array(
                'titulo'   => 'required',
            );
        }

        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen =null;
        $file_name =null;
        if( $request->file('imagenSec')){
            $url_imagen = Storage::disk('public')->put('imagenes', $request->file('imagenSec'));
            $file_name=$request->imagen_name;
        }else{
            $url_imagen =  $request->url_file;
            $file_name  =$request->name_file;
        }



        DB::table('inicio_seccion_det')
            ->where('codigo',$request->sec04_cod)
            ->update([
                'titulo' =>$request->titulo,
                'descripcion' =>$request->descripcion,
                'glosa'       =>$request->glosa,
                'name_file' =>$file_name,
                'url_file' =>$url_imagen,
                'fecha_creacion'    => date('Y-m-d H:m:s'),
                'estado'            => 1,
            ]);
    }
    public function destroy_sec04($id)
    {
        // dd($id);

            DB::table('inicio_seccion_det')
            ->where('codigo',$id)
            ->update([
                'estado'            => '3',
            ]);

        return redirect('/seccion04');
    }
    public function habilitar_sec04 ($id){
        //dd($id);
        DB::table('inicio_seccion_det')
        ->where('codigo',$id)
        ->update([
            'estado'            => '1',
        ]);
        return redirect('/seccion04');

    }
    public function desabilitar_sec04 ($id){
        //dd($id);
        DB::table('inicio_seccion_det')
        ->where('codigo',$id)
        ->update([
            'estado'            => '2',
        ]);
        return redirect('/seccion04');

    }
    /* seccion 05  */
    public function index05()
    {
        $inicio_seccion_det05 = DB::table('inicio_seccion_det')
                    ->where('id_seccion','SEC5')->whereIn('estado',[1,2])->get();
        //   dd($inicio_seccion_det03);
        return view('forms.Pagina_mnt.seccion5.lstSeccion05',[
            'inicio_seccion_det05' => $inicio_seccion_det05
        ]);
    }
     public function Seccion05()
    {
        return view('forms.Pagina_mnt.seccion5.addSeccion05');
    }
    public function storeSeccion05(Request $request)
    {

        //  dd($request->imagen);
        // dd($request);
         $rules = array(
                'imagenSec'     => 'required|mimes:jpg,tif,jpeg,png',
                'titulo'   => 'required',
                'precio'   => 'required',
            );
        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen =null;
         $url_imagen = Storage::disk('public')->put('imagenes', $request->file('imagenSec'));

        DB::table('inicio_seccion_det')
        ->insert([
         'id_seccion' =>'SEC5' ,
         'titulo' =>$request->titulo,
         'precio' =>$request->precio,
         'glosa'       =>$request->glosa,
         'name_file'   =>$request->imagen_name,
         'url_file'   =>$url_imagen,
         'fecha_creacion'    => date('Y-m-d H:m:s'),
         'estado'            => 1,
        ]);



    }
    public function showSeccion05($id)
    {
         $inicio_seccion_det05 = DB::table('inicio_seccion_det')
                    ->where('codigo',intval($id))->get();

        return view('forms.Pagina_mnt.seccion5.updSeccion05',[
            'inicio_seccion_det05' => $inicio_seccion_det05
        ]);
    }
    public function updSeccion05(Request $request)
    {

        //  dd($request->imagen);
        //    dd($request);
        if( $request->file('imagenSec')){
            $rules = array(
                'imagenSec'     => 'required|mimes:jpg,tif,jpeg,png',
                'titulo'   => 'required',
                'precio'   => 'required'
            );

        }else{
            $rules = array(
                'titulo'   => 'required',
            );
        }

        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen =null;
        $file_name =null;
        if( $request->file('imagenSec')){
            $url_imagen = Storage::disk('public')->put('imagenes', $request->file('imagenSec'));
            $file_name=$request->imagen_name;
        }else{
            $url_imagen =  $request->url_file;
            $file_name  =$request->name_file;
        }



        DB::table('inicio_seccion_det')
            ->where('codigo',$request->sec05_cod)
            ->update([
                'titulo' =>$request->titulo,
                'descripcion' =>$request->descripcion,
                'glosa'       =>$request->glosa,
                'name_file' =>$file_name,
                'url_file' =>$url_imagen,
                'precio' =>$request->precio,
                'fecha_creacion'    => date('Y-m-d H:m:s'),
                'estado'            => 1,
            ]);
    }
    public function destroy_sec05($id)
    {
        // dd($id);

            DB::table('inicio_seccion_det')
            ->where('codigo',$id)
            ->update([
                'estado'            => '3',
            ]);

        return redirect('/seccion05');
    }
    public function habilitar_sec05 ($id){
        //dd($id);
        DB::table('inicio_seccion_det')
        ->where('codigo',$id)
        ->update([
            'estado'            => '1',
        ]);
        return redirect('/seccion05');

    }
    public function desabilitar_sec05 ($id){
        //dd($id);
        DB::table('inicio_seccion_det')
        ->where('codigo',$id)
        ->update([
            'estado'            => '2',
        ]);
        return redirect('/seccion05');
    }
    /* seccion 06  */




}
