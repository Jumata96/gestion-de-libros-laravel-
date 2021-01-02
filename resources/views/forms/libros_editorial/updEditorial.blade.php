@extends('layouts2.app')
@section('titulo','Registrar Editorial')

@section('main-content')
<br>
@foreach ($Editoriales as $editorial)
    

<div class="row">
  <div class="col s12 m12 l10 offset-l1">
                <div class="card">
                  <div class="card-header">                    
                    <i class="fa fa-table fa-lg material-icons">receipt</i>
                    <h2>REGISTRAR EDITORIAL</h2>
                  </div>
                  <form  id="myForm" accept-charset="UTF-8" enctype="multipart/form-data">
                  <div class="row card-header sub-header">
                        <div class="col s12 m12 herramienta">                         
                          <a id="updEditorial" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped" data-position="top" data-delay="500" data-tooltip="Guardar">
                            <i class="material-icons blue-text text-darken-2">check</i></a>
                          <a style="margin-left: 6px"></a>   
                          
                          <a href="{{url('/lstEditoriales')}}" class="btn-floating right waves-effect waves-light grey lighten-5 tooltipped" href="#!" data-activates="dropdown2" data-position="top" data-delay="500" data-tooltip="Regresar">
                            <i class="material-icons" style="color: #424242">keyboard_tab</i></a>            
                        </div>   
                  </div> 
                  <div class="row cuerpo">
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="codigo" value="{{$editorial->codigo}}">
                    
                    <div class="col s12 m12 l6 ">
                      <div class="collapsible-header light-blue light-blue-text text-lighten-5 active">
                <i class="material-icons">attach_file</i> 
                Datos Generales</div>
                      <div class="card white">
                        <div class="card-content"> 
                            <div class="row">
                                
                              <div class="input-field col s12 m6 l12">
                                <i class="material-icons prefix">assignment</i>
                                <input id="nombre" name="nombre" value="{{$editorial->nombre}}" type="text" data-error=".error2" maxlength="200" >
                                <label for="nombre"> Nombre de Editorial</label>
                                <div id="error1" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                              </div>  
                              <div class="input-field col s12 m6 l12">
                                <i class="material-icons prefix">assignment</i>
                                <input id="dsCorta" maxlength="5" name="dsCorta" value="{{$editorial->dsc_corta}}" type="text" data-error=".errorTxt4" >
                                <label for="dsCorta">Ds.Corta</label>
                                 <div id="error3" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                              </div> 
                          						 
                              <div class="input-field col s12 m6 l12">
                                <i class="material-icons prefix">comment</i>
                                <label for="glosa">Glosa</label>
                                <textarea  class="materialize-textarea" name="glosa" rows="1" cols="2"> {{$editorial->descripcion}}
                                </textarea>
                                  <div id="error6" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                              </div>    
                            </div>

                        </div>
                      </div>
                    </div>
          <div class="col s12 m6 l6">
            <div class="collapsible-header light-blue light-blue-text text-lighten-5 active">
              <i class="material-icons">attach_file</i> 
              Datos de Contacto
            </div>
            <div class="card white">
              <div class="card-content">
                <div class="row">
                  <div class="input-field col s12 m6 l12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="text" data-error=".error2" maxlength="200"value="{{$editorial->correo}}"  >
                    <label for="email"> Correo</label>
                    <div id="error7" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
                  </div>
                  <div class="input-field col s12 m6 l12">
                    <i class="material-icons prefix">call</i>
                    <input id="telefono"   name="telefono" type="text" data-error=".errorTxt4" value="{{$editorial->telefono}}" >
                    <label for="telefono">Telefono</label>
                    <div id="error8" style="padding-left: 3rem; color: red; font-size: 12px; font-style: italic;"></div>
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
  @include('forms.libros_editorial.scripts.updEditorial')  
@endsection
