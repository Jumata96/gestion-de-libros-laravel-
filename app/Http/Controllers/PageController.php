<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
use App\Events\MessageStatusChangedEvent;
use DB;
use Auth;
use Validator;



class PageController extends Controller
{

        public function index2()
    {

         $carrusel = DB::table('carrusel')->whereIn('estado',[1,2])->get();
         $libro_categoria = DB::table('libro_categoria')->whereIn('estado',[1,2])->get();
         $libro_imagenes = DB::table('libro_imagenes')->whereIn('estado',[1,2])->get();
         $libro = DB::table('libro')->whereIn('estado',[1,2])->get();


         $inicio_seccion_det01 = DB::table('inicio_seccion_det')
                    ->where([
                        ['id_seccion','=','SEC1'],['estado','=',1]
                    ])->get();
        $inicio_seccion_det03 = DB::table('inicio_seccion_det')
                    ->where([
                        ['id_seccion','=','SEC3'],['estado','=',1]
                    ])->get();
        $inicio_seccion_det04 = DB::table('inicio_seccion_det')
                    ->where([
                        ['id_seccion','=','SEC4'],['estado','=',1]
                    ])->get();
        $inicio_seccion_det05 = DB::table('inicio_seccion_det')
                    ->where([
                        ['id_seccion','=','SEC5'],['estado','=',1]
                    ])->get();

        /* $identificador_carrito = session('idCarrito'); */


        if( session()->get('visitante') == null){
            $key = new MaestroController();
            session(['visitante' => $key->codigoNumero(20)]);
        }
         $identificadorCliente = session()->get('visitante');
        //   dd($identificadorCliente);
        //  dd($identificadorCliente);
        // consultamos si tiene datos en carrito
        $carrito = DB::table('carrito')->where('idcliente',$identificadorCliente )->get();
        $idcarrito=null;
        $total=null;
            foreach($carrito as $car){
                $idcarrito=$car->idcarrito;
                $total=$car->total;
            }
            if( $total==null){
                 $total=0;
            }
        $carritoDet = DB::table('dcarrito')->where('idcarrito',$idcarrito)->get();
        // dd($carritoDet);

        return view('forms.pagina.inicio',[
            'carrusel'	=> $carrusel,
            'libro_categoria'	=> $libro_categoria,
            'libro_imagenes'	=> $libro_imagenes,
             'total'	=> $total,
            'carritoDet'	=> $carritoDet,
            'libro'	=> $libro,
            'inicio_seccion_det01'=>$inicio_seccion_det01,
            'inicio_seccion_det03'=>$inicio_seccion_det03,
            'inicio_seccion_det04'=>$inicio_seccion_det04,
            'inicio_seccion_det05'=>$inicio_seccion_det05
        ]);
    }
    public function index()
    {
        $carrusel = DB::table('carrusel')->where('estado',1)->get();
        $cursos = DB::table('cursos')->where('estado',1)->get();
        $horarios = DB::table('horarios')->where('estado',1)->get();

        $general = DB::table('general')->where('estado',1)->get();
        $dgeneral = DB::table('dgeneral')->where('estado',1)->get();

        $inicio_seccion = DB::table('inicio_seccion')->where('estado',1)->get();
        $inicio_seccion_det = DB::table('inicio_seccion_det')->where('estado',1)->get();

        $contactanos  =DB::table('contactanos')->get();
        $empresas  =DB::table('empresa')->get();

        return view('samurai.inicio',[
            'carrusel'          => $carrusel,
            'cursos'            => $cursos,
            'general'           => $general,
            'dgeneral'          => $dgeneral,
            'contactanos'       => $contactanos,
            'empresas'          => $empresas,
            'inicio_seccion'    => $inicio_seccion,
            'inicio_seccion_det'=> $inicio_seccion_det,
            'horarios'          => $horarios

        ]);
    }

        public function contactanos()
    {
        $contactanos  =DB::table('contactanos')->get();
        $empresas  =DB::table('empresa')->get();


        return view('samurai.contactanos',[
            'contactanos' => $contactanos,
            'empresas' => $empresas
        ]);
    }
        public function store(Request $request)
    {
        DB::table('mensaje')
                ->insert([
                    'enviado_por'    => $request->s5_qc_name,
                    'email_cliente' => $request->s5_qc_email,
                    'email_destino'  => "SISTEMA",
                    'asunto'         =>$request->s5_qc_subject,
                    'mensaje'        => $request-> s5_qc_field1,
                    'entrante'       =>1,
                    'fecha'          => date('Y-m-d H:m:s')
        ]);


        $msjs = DB::table('mensaje')
            ->select('id','enviado_por','email_destino','asunto','mensaje', 'fecha','visto')
            ->where([
                ['entrante',1],
                ['visto',0]
            ])
            ->orderBy('fecha', 'desc')
            ->first();
            $cont = 1;

        // return ['mensajes' => $msjs, 'contador' => $cont];


     event(new MessageStatusChangedEvent(['mensajes' => $msjs, 'contador' => $cont]));

    }
}
