@extends('samurai.layout.app')
@section('titulo','Inicio')

@section('main-content') 
   @include('samurai.layout.inicio.carrusel')   
   @include('samurai.layout.inicio.seccion1') 
   @include('samurai.layout.inicio.seccion2')
   @include('samurai.layout.inicio.seccion3')
   @include('samurai.layout.inicio.seccion4')
   @include('samurai.layout.inicio.seccion5') 
    
   @include('samurai.layout.inicio.seccion6') 
    @foreach ($contactanos as $contacto) 
      @foreach ($empresas as $empresa)  
         @include('samurai.layout.inicio.seccion7') 
      @endforeach
   @endforeach 
@include('forms.contactanos.scripts.enviarMensaje')
@endsection
