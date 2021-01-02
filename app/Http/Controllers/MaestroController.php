<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MaestroController extends Controller
{
    public function codigoN(int $n){
        $key = '';

        $caracteres = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        //aquí podemos incluir incluso caracteres especiales pero cuidado con las ‘ y “ y algunos otros
        $length = $n;
        $max = strlen($caracteres) - 1;

        for ($i=0;$i<$length;$i++) {
            $key .= ''.substr($caracteres, rand(0, $max), 1);
        }

        return $key;
    }
    public function codigoNumero(int $n){
        $key = '';

        $caracteres = "2574564984989849849849843164984984912658123456789025745649849898498498498431649849849126580123456789";
        //aquí podemos incluir incluso caracteres especiales pero cuidado con las ‘ y “ y algunos otros
        $length = $n;
        $max = strlen($caracteres) - 1;

        for ($i=0;$i<$length;$i++) {
            $key .= ''.substr($caracteres, rand(0, $max), 1);
        }

        return $key;
    }
}
