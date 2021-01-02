@extends('layouts2.app')
@section('titulo','actualizar categoria')

@section('main-content')
<br>
@foreach ($categorias as $categoria)


<div class="row">
  <div class="col s12 m12 l10 offset-l1">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-table fa-lg material-icons">receipt</i>
                    <h2>ACTUALIZAR CATEGORIA</h2>
                  </div>
                  <form  id="myForm" accept-charset="UTF-8" enctype="multipart/form-data">
                  <div class="row card-header sub-header">
                        <div class="col s12 m12 herramienta">
                          <a id="updCategoria" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped" data-position="top" data-delay="500" data-tooltip="Guardar">
                            <i class="material-icons blue-text text-darken-2">check</i></a>
                          <a style="margin-left: 6px"></a>

                          <a href="{{url('/lstCategorias')}}" class="btn-floating right waves-effect waves-light grey lighten-5 tooltipped" href="#!" data-activates="dropdown2" data-position="top" data-delay="500" data-tooltip="Regresar">
                            <i class="material-icons" style="color: #424242">keyboard_tab</i></a>
                        </div>
                  </div>
                  <div class="row cuerpo">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="codigo" value="{{$categoria->codigo}}">

                    <div class="col s12 m12 l12 ">
                      <div class="collapsible-header light-blue light-blue-text text-lighten-5 active">
                <i class="material-icons">attach_file</i>
                Datos Generales</div>
                      <div class="card white">
                        <div class="card-content">
                            <div class="row">

                              <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">assignment</i>
                                <input id="nombre" name="nombre" value="{{$categoria->nombre}}" type="text" data-error=".error2" maxlength="200" >
                                <label for="nombre"> Nombre de Categoría</label>
                                <div id="error1" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                              </div>
                              <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">assignment</i>
                                <input id="dsCorta" maxlength="5" name="dsCorta" value="{{$categoria->dsc_corta}}" type="text" data-error=".errorTxt4" >
                                <label for="dsCorta">Ds.Corta</label>
                                 <div id="error3" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                              </div>   {{--
                              <div class="input-field col s12 m6 l6">
                                  <i class="material-icons prefix">call</i>
                                  <input id="telefono" name="telefono" type="text" maxlength="20">
                                  <label for="telefono">Telefono</label>
                                   <div id="error4" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                              </div>
                              <div class="input-field col s12 m6 l6" style="padding-top: 20px;">
                                  <i class="material-icons prefix" style="padding-bottom: 50px;">email</i>
                                  <input id="email" name="email" type="text">
                                  <label for="email">Email</label>
                                   <div id="error5" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                              </div>  --}}

                              <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">comment</i>
                                <label for="glosa">Glosa</label>
                                <textarea  class="materialize-textarea" name="glosa" rows="1" cols="2"> {{$categoria->descripcion}}
                                </textarea>
                                  <div id="error6" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                              </div>
                              {{-- <div class=" col s12">
                                 <div id="error7" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                                  <div class="col l1">
                                    <i class="material-icons prefix" style="padding-bottom: 20px;">event_available</i>
                                  </div>
                                  <div class="col l11">
                                    <label for="servicios" class="">Servicios</label>
                                  </div>
                                  <div class="col l12">
                                  <textarea class="ckeditor" name="editor1"   id="editor1" rows="10" cols="80" > </textarea>
                                    <input type="hidden" id="servicios"  name="servicios" value="">
                                  </div>
                               </div> --}}

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
  @include('forms.libros_categoria.scripts.updCategoria')
@endsection
