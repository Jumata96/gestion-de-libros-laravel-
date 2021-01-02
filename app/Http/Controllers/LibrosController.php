<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Echo_;

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
             if($request->file('caratula')){
                $rules = array(
                    'caratula'     => 'required|mimes:png,jpg,jpeg',
                    'nombre'            => 'required',
                    'ISBM'            => 'required',
                    'precio'            => 'required',
                    'ejemplares'            => 'required',
                    'Idioma'            => 'required',
                    'idCategoria'            => 'required',
                    'idEditorial'            => 'required',
                );
            }else{
                $rules = array(
                'nombre'            => 'required',
                'ISBM'            => 'required',
                'precio'            => 'required',
                'ejemplares'            => 'required',
                'Idioma'            => 'required',
                'idCategoria'            => 'required',
                'idEditorial'            => 'required',
                );
            }


        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        // dd('llego');
        $url_imagen=null;
         if($request->file('caratula')){
                 $url_imagen = Storage::disk('public')->put('imagenes', $request->file('caratula'));
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
            'file_url'          =>'storage/'.$url_imagen,
            'file_name'        =>$request->caratula_img,
            'precio_oferta'      =>$request ->precioOferta,
            'estado'            => '1'

        ]);

         $libros =DB::table('libro')->orderBy('codigo', 'desc')->limit(1)->get();
         $codigoLibro=null;

         foreach($libros as $libro){
             $codigoLibro = $libro->codigo;
         }

                     DB::table('libro_imagenes')
                    ->insert([
                        'codigo_libro'      => intval($codigoLibro),
                        'nombre'              => $request->caratula_img,
                        'url_file'        => 'storage/'.$url_imagen,
                        'fecha_creacion'    => date('Y-m-d h:m:s'),
                        'estado'            => '1'
                    ]);



        if( intval($request->imagenes_mun) >= 1){
            for ($i = 0; $i <=intval($request->imagenes_mun)-1; $i++) {
                $file=$request->file('archivo'.$i);

                $extension = $request->file('archivo'.$i)->getClientOriginalExtension();
                // dd($extension);
                if($extension =='jpg'or $extension =='png' or $extension =='jpeg' ){
                    $imagen_name= $file->getClientOriginalName();
                    $url_imagen=null;
                    $url_imagen = Storage::disk('public')->put('imagenes', $request->file('archivo'.$i));
                    DB::table('libro_imagenes')
                    ->insert([
                        'codigo_libro'      => intval($codigoLibro),
                        'nombre'              => $imagen_name,
                        'url_file'        => 'storage/'.$url_imagen,
                        'fecha_creacion'    => date('Y-m-d h:m:s'),
                        'estado'            => '1'
                    ]);
                }
            }
        }
        return response()->json("conforme");

    }
    public function show($id){

        $libro_categoria = DB::table('libro_categoria')->where('estado',1)->get();
        $libro_Editorial = DB::table('libro_Editorial')->where('estado',1)->get();
        $imagenes = DB::table('libro_imagenes')->where('codigo_libro' , $id )->get();

         $libros = DB::table('libro')->where('codigo', $id)->get();
            // dd($libros);
            return view('forms.libros.updLibro',[
                'libro_categoria'=>$libro_categoria,
                'libro_Editorial'=>$libro_Editorial,
                'imagenes'=>$imagenes,
                'libros' =>$libros
            ]);
    }
    public function update ( Request  $request){
        //  dd($request);

        if($request->file('caratula')){
                $rules = array(
                    'caratula'     => 'required|mimes:png,jpg,jpeg',
                    'nombre'            => 'required',
                    'ISBM'            => 'required',
                    'precio'            => 'required',
                    'ejemplares'            => 'required',
                    'Idioma'            => 'required',
                    'idCategoria'            => 'required',
                    'idEditorial'            => 'required',
                );
        }else{
            $rules = array(
            'nombre'            => 'required',
            'ISBM'            => 'required',
            'precio'            => 'required',
            'ejemplares'            => 'required',
            'Idioma'            => 'required',
            'idCategoria'            => 'required',
            'idEditorial'            => 'required',
            );

        }
        $validator = Validator::make ( $request->all(), $rules );
        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        }
        $url_imagen=null;
         if($request->file('caratula')){
                 $url_imagen_temp = Storage::disk('public')->put('imagenes', $request->file('caratula'));
                  $url_imagen='storage/'.$url_imagen_temp ;
        }else{
             $url_imagen=$request->libro_url_img;
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
            'file_url'          =>$url_imagen,
            'file_name'         =>$request->caratula_img,
            'precio_oferta'      =>$request->precioOferta,
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
        public function destroyImg($id,$codigo)
    {

        DB::table('libro_imagenes')
        ->where('codigo',intval($id))->delete();
        return redirect('/libros-mostrar-'.$codigo);
    }
    public function storeImg ( Request  $request){
         /*    $rules = array(
                    'caratula'     => 'required|mimes:png,jpg,jpeg',
            );

        $validator = Validator::make ( $request->all(), $rules );

        if ($validator->fails()){
            $var = $validator->getMessageBag()->toarray();
            array_push($var, 'error');
            return response()->json($var);
        } */
        // dd('llego');
        $url_imagen=null;
         if($request->file('caratula')){
                 $url_imagen = Storage::disk('public')->put('imagenes', $request->file('caratula'));
        }

         $codigoLibro=$request->codigo_libro;
        //  dd($request->libro_id_add);
            for ($i = 0; $i <=intval($request->imagenes_mun)-1; $i++) {
                $file=$request->file('archivo'.$i);

                $extension = $request->file('archivo'.$i)->getClientOriginalExtension();
                // dd($extension);
                if($extension =='jpg'or $extension =='png' or $extension =='jpeg' ){
                    $imagen_name= $file->getClientOriginalName();
                    $url_imagen=null;
                    $url_imagen = Storage::disk('public')->put('imagenes', $request->file('archivo'.$i));
                    DB::table('libro_imagenes')
                    ->insert([
                        'codigo_libro'      => intval($codigoLibro),
                        'nombre'              => $imagen_name,
                        'url_file'        => 'storage/'.$url_imagen,
                        'fecha_creacion'    => date('Y-m-d h:m:s'),
                        'estado'            => '1'
                    ]);
                }
            }
        return response()->json([
            'codigo'=>$codigoLibro,
        ]);

    }
    public function pedido ( Request  $request){
        $nombre =null;
        $ejemplares=null;
        $costo=null;
        $costo_oferta=null;
        $precio=null;
        $imagen =null;
        $total=null;
        $libros = DB::table('libro')->where('codigo',intval($request->id))->get();
        foreach($libros as $libro){
            $nombre =$libro->nombre;
            $ejemplares=$libro->ejemplares;
            $costo=$libro->costo;
            $costo_oferta=$libro->precio_oferta;
            $imagen=$libro->file_url;
        }
        if ( $costo_oferta != null and $costo> $costo_oferta ) {
             $precio=$costo_oferta;
        } else {
             $precio=$costo;
        }
         /* if( session()->get('visitante') == null){
            $key = new MaestroController();
            session(['visitante' => $key->codigoNumero(20)]);
        } */
         $identificadorCliente = $request->session()->get('visitante');
        //  dd($identificadorCliente);
        // consultamos si tiene datos en carrito
        $carrito = DB::table('carrito')->where('idcliente',$identificadorCliente )->get();
        //  dd($carrito,$identificadorCliente);
        // dd(count($carrito));
        if(count($carrito)==0){
            // dd('llego');
             $key = new MaestroController();
             $idCarrito = $key->codigoN(10);
             DB::table('carrito')
                ->insert([
                    'idcarrito'=>$idCarrito ,
                    'idcliente'=>  $identificadorCliente,
                    // 'operacion'=> "COMPRA DE LIBROS",
                    'fecha'=>date('Y-m-d H:m:s') ,
                    'estado'=> 1,
                     'total'=> intval($request->quantity)*doubleval($precio),
                    // 'idempresa'=> ,
                    // ' descuento'=> ,
                    // ' glosa'=> ,
                    // ' imagen'=> ,
                    // ' url_imagwn'=> ,
                    // ' url_imagen'=> ,
                    // ' ruc'=> ,
                    // ' razon_social'=> ,
                    // ' nombre'=> ,
                    // ' apellidos'=> ,
                    // ' direccion'=> ,
                    // ' telefono'=> ,
                    // ' observacion'=> ,
                    // ' idfpago'=> ,
                    // ' estado_seguimiento'=> ,
                    // ' idarea'=> ,
                    // ' descripcion_transportista'=> ,
                    // ' fecha_pago'
                ]);

            DB::table('dcarrito')
                ->insert([
                    'idcarrito'=>$idCarrito ,
                    // ' item'=>,
                    'idproducto'=>$request->id,
                    'precio'=>$precio,
                    'cantidad'=>$request->quantity,
                    'total'=> intval($request->quantity)*doubleval($precio),
                    'fecha'=>date('Y-m-d H:m:s') ,
                    'img_producto' =>$imagen,
                    'nombre_producto'=>$nombre,
                    'estado'=> 1,
             ]);
            $total=intval($request->quantity)*doubleval($precio);

        }else{
            // dd('no llego');
            //se verifica que exite un cariito y le agregaremos productos al carrito
            $idcarrito=null;
            foreach($carrito as $car){
                $idcarrito=$car->idcarrito;
                 $total=$car->total;
            }
           $carritoDet = DB::table('dcarrito')->where([['idcarrito',$idcarrito],['idproducto',$request->id] ])->get();
           if(count($carritoDet) ==0){
               //verificamos que el producto seleccionado no esta registrado
                DB::table('dcarrito')
                ->insert([
                    'idcarrito'=>$idcarrito ,
                    // ' item'=>,
                    'idproducto'=>$request->id,
                    'precio'=>$precio,
                    'cantidad'=>$request->quantity,
                    'total'=> intval($request->quantity)*doubleval($precio),
                    'fecha'=>date('Y-m-d H:m:s') ,
                    'img_producto' =>$imagen,
                    'nombre_producto'=>$nombre,
                    'estado'=> 1,
                ]);

                $total=$total +( intval($request->quantity)*doubleval($precio));
                 DB::table('carrito')
                 ->where('idcarrito',$idcarrito)
                 ->update([
                      'total'=>  $total,
                 ]);
           }else{
               //verificamos que el producto seleccionado   esta registrado
               //actualizamos el numero de productos del carrito
                $item=null;
                $cantidad=null;
                foreach($carritoDet as $carDet){
                    $item=$carDet->item;
                    $cantidad=$carDet->cantidad;
                }
                 $cantidad=$cantidad+intval($request->quantity);
                 DB::table('dcarrito')
                 ->where('item',intval($item))
                 ->update([
                      'cantidad'=>  $cantidad,
                 ]);
                $total=$total +( intval($request->quantity)*doubleval($precio));
                 DB::table('carrito')
                 ->where('idcarrito',$idcarrito)
                 ->update([
                      'total'=>  $total,
                 ]);
           }
        }
        $carritoNuevo = DB::table('carrito')->where('idcliente',$identificadorCliente )->get();
        $idcarritoNuevo=null;
        foreach($carritoNuevo as $car){
           $idcarritoNuevo=$car->idcarrito;
        }
        $carritoDetNuevo = DB::table('dcarrito')->where('idcarrito',$idcarritoNuevo)->get();
        return response()->json([
            'codigo'=>$request->id,
            'quantity'=>$request->quantity,
            'precio'=> $precio,
            'nombre'=>$nombre,
            'imagen'=>$imagen,
            'total'=>strval($total),
            'carrito'=> $carritoNuevo ,
            'carritoDet'=>$carritoDetNuevo
        ]);

    }
}
