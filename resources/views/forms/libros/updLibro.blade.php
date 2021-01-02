@extends('layouts2.app')
@section('titulo','Registrar Libros')
@section('main-content')
@foreach ($libros as $libro)
<br>
<div class="row">
  <div class="col s12 m12 l12">
    <div class="card">
      <div class="card-header">
        <i class="fa fa-table fa-lg material-icons">receipt</i>
        <h2>ACTUALIZAR LIBRO</h2>
      </div>
      <form  id="myForm" accept-charset="UTF-8" enctype="multipart/form-data">
        <div class="row card-header sub-header">
          <div class="col s12 m12 herramienta">                         
            <a id="updLibros" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped" data-position="top" data-delay="500" data-tooltip="Guardar">
            <i class="material-icons blue-text text-darken-2">check</i></a>
            <a style="margin-left: 6px"></a>   
            <a href="{{url('/lstLibros')}}" class="btn-floating right waves-effect waves-light grey lighten-5 tooltipped" href="#!" data-activates="dropdown2" data-position="top" data-delay="500" data-tooltip="Regresar">
            <i class="material-icons" style="color: #424242">keyboard_tab</i></a>            
          </div>
        </div>
        <div class="row cuerpo">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="libro_id" id="libro_id" value="{{ $libro->codigo  }}">
          <input type="hidden" name="libro_url_img" value="{{ $libro->file_url  }}">
          <div class="col s12 m12 l8 ">
            <div class="collapsible-header light-blue light-blue-text text-lighten-5 active">
              <i class="material-icons">attach_file</i> 
              Datos Generales
            </div>
            <div class="card white">
              <div class="card-content">
                <div class="row">
                  
                  <div class="col s12 m6 l6" style="padding-left:50px;padding-top: 10px;">
                    <label for="idCategoria">Categoría </label>
                    <select class="browser-default" id="idCategoria" name="idCategoria" >
                      <option value="" disabled selected="">Seleccione</option>
                      @foreach($libro_categoria as $categoria)
                      @if ($libro->libro_categoria==$categoria->codigo)
                      <option value="{{$categoria->codigo}}" selected >{{$categoria->dsc_corta}} - {{$categoria->nombre}}</option>
                      @else
                      <option value="{{$categoria->codigo}}"  >{{$categoria->dsc_corta}} - {{$categoria->nombre}}</option>
                      @endif 
                      @endforeach                                                                                  
                    </select>
                    <input type="hidden" id="parametro" name="parametro" value="NO">
                    <div id="error7" style="color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="col s12 m6 l6" style="padding-left:50px; padding-top: 10px;">
                    <label for="idEditorial">Editorial</label>
                    <select class="browser-default" id="idEditorial" name="idEditorial" >
                      <option value="" disabled selected="">Seleccione</option>
                      @foreach($libro_Editorial as $Editorial)
                      @if ( $libro->libro_Editorial==$Editorial->codigo )
                      <option value="{{$Editorial->codigo}}" selected >{{$Editorial->dsc_corta}} - {{$Editorial->nombre}}</option>
                      @else
                      <option value="{{$Editorial->codigo}}">{{$Editorial->dsc_corta}} - {{$Editorial->nombre}}</option>
                      @endif 
                      @endforeach                                                                                  
                    </select>
                    <input type="hidden" id="parametro" name="parametro" value="NO">
                    <div id="error8" style="color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">assignment</i>
                    <input id="nombre" name="nombre" type="text" data-error=".error2" maxlength="50" value="{{$libro->nombre}}" >
                    <label for="nombre"> Nombre del Libro</label>
                    <div id="error1" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l6 ">
                    <i class="material-icons prefix active">label_outline</i>
                    <input id="ISBM" name="ISBM" type="text"   maxlength="15" onkeyup="mayus(this);" value="{{$libro->ISBM}}">
                    <label for="ISBM">ISBM</label>
                    <div id="error2" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="precio" maxlength="4" name="precio" type="number" data-error=".errorTxt4" value="{{$libro->costo}}" >
                    <label for="precio">Precio</label>
                    <div id="error3" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="precioOferta" maxlength="4" name="precioOferta" type="number" data-error=".errorTxt4" value="{{$libro->precio_oferta}}" >
                    <label for="precioOferta">Precio Oferta</label>
                    <div id="error3" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">content_copy</i>
                    <input id="ejemplares" name="ejemplares" type="number" maxlength="20" value="{{$libro->ejemplares}}">
                    <label for="ejemplares">Ejemplares</label>
                    <div id="error4" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">turned_in_not</i>
                    <input id="paginas" maxlength="4" name="paginas" type="number" data-error=".errorTxt4" value="{{$libro->paginas}}">
                    <label for="paginas">numero de paginas </label>
                    <div id="error5" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">g_translate</i>
                    <input id="Idioma" name="Idioma" type="text" maxlength="20" value="{{$libro->idioma}}">
                    <label for="Idioma">Idioma</label>
                    <div id="error6" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l12" style="padding-top:50px">
                    <i class="material-icons prefix">comment</i>
                    <label for="glosa">Glosa</label>
                    <textarea  class="materialize-textarea" name="glosa" rows="1" cols="2"> {{$libro->descripcion}}
                                </textarea>
                    <div id="error9" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4 ">
            <div class="collapsible-header light-blue light-blue-text text-lighten-5 active">
              <i class="material-icons">attach_file</i> 
              IMAGENES
            </div>
            <div class="card white">
              <div class="card-content">
                <div class="row"> 
                  <div class="col s12">
                                <div class="file-field input-field col s12 "> 
                                  <div class="col s12 m12 l12  center" style="">
                                    @if(!empty($libro->file_url))
                                    <img src="{{asset('/')}}{{$libro->file_url}}" alt="" id="avatarImage" class="z-depth-1" style="height: 100%; width: 100%">
                                    @else
                                    <i class="material-icons gradient-45deg-blue-grey-blue-grey z-depth-1" style="font-size: 9rem; height:  100%; width: 100%">sentiment_satisfied</i>
                                    @endif
                                  </div> 
                                  <div class="file-field input-field col s12 l12">
                                    
                                    <div class="file-path-wrapper">
                                      <input class="file-path validate" type="text" name="caratula_img" id="caratula_img">
                                        <div class="btn light-blue darken-1  col l12 s12">
                                          <span>CARGAR</span>
                                          <input type="file" id="caratula" name="caratula">
                                        </div>
                                      <p class="right"><i>Solo se permiten imágenes con extención JPG PNG </i></p>
                                      <div class="errorTxt1" id="h_error1" style="color: red; font-size: 12px; font-style: italic;"></div>
                                    </div>

                                </div>

                                  {{-- <div class="col s12" style="padding: 0px; padding-top:50px">
                                    <div class="btn">
                                      <span>File</span>
                                      <input type="file" id="avatarInput" name="file_caratula" id="file_caratula">
                                    </div>
                                    <div class="file-path-wrapper">
                                      <input class="file-path validate" type="text" name="caratula_img" value="{{$libro->file_name}}">
                                      <div class="errorTxt1" id="h_error1" style="color: red; font-size: 12px; font-style: italic;"></div>
                                    </div>
                                  </div>   --}} 
                                </div>                 
                              </div>  


                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l12 ">
            <div class="collapsible-header light-blue light-blue-text text-lighten-5 active">
              <i class="material-icons">attach_file</i> 
              IMAGENES
            </div>
            <div class="card white">
              <div class="card-content">
                <div class="row"> 
                  <div class="col s12">
                                <div class="file-field input-field col s12 ">  
                                @foreach($imagenes as $img)
                                <div id="tr{{$img->codigo}}" class="col s12 m6 l2 center" style="padding: 1rem;">
                                  <img src="{{asset('/')}}{{$img->url_file}}" alt="" id="avatarImage" style="height: 5rem">  
                                  <a href="#confirmacion_{{$img->codigo}}" class=" waves-effect waves-light btn right red lighten-2 center modal-trigger" style="width: 100%">
                                    <i class="material-icons left" style="font-size: 35px;padding-left: 2rem;">delete</i>
                                  </a>
                                </div>   
                                @include('forms.libros.scripts.alertaDltImagen')
                                @endforeach    
                                <div  class="col s12 m6 l2 center" style="padding: 1rem;;padding-top: 6.5rem"> 
                                  <a href="#modalAddLibro" class=" waves-effect waves-light btn right red lighten-2 center modal-trigger" style="width: 100%;">
                                    <i class="material-icons left" style="font-size: 35px;padding-left: 2rem;">add</i>
                                  </a>
                                </div> 
                                @include('forms.libros.modalAddLibro')

                              </div>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<br><br><br>
@endforeach
@endsection
@section('script')
@include('forms.libros.scripts.updLibro')  
@endsection