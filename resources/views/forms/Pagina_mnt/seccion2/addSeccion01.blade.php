@extends('layouts2.app')
@section('titulo','Agregar item')

@section('main-content')
<br>
<div class="row">
  <div class="col s12 m12 l12">
                <div class="card">
                  <div class="card-header">                    
                    <i class="fa fa-table fa-lg material-icons">receipt</i>
                    <h2>AGREGAR ITEM A LA SECCION 01</h2>
                  </div>
                  <form class="right-alert" id="MyForm" method="POST"   accept-charset="UTF-8" enctype="multipart/form-data">
                  <div class="row card-header sub-header">
                        <div class="col s12 m12 herramienta">                         
                          <a id="guardarSeccion01" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped" name="action" data-position="top" data-delay="500" data-tooltip="Guardar">
                            <i class="material-icons" style="color: #2E7D32">check</i>
                          </a>   
                          <a style="margin-left: 6px"></a>   
                          
                          <a href="{{url('/seccion1')}}" class="btn-floating right waves-effect waves-light grey lighten-5 tooltipped" href="#!" data-activates="dropdown2" data-position="top" data-delay="500" data-tooltip="Regresar">
                            <i class="material-icons" style="color: #424242">keyboard_tab</i></a>            
                        </div>           
                        
                  </div>
                                    
                  
                  <div class="row">
                    <div class="col m4 l4">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card white">
                        <div class="card-content">
                            <span class="card-title">Imagen</span>

                            <div class="row">
                              <div class="col s12">
                                <div class="file-field input-field col s12 "> 
                                  <div class="col s8 m8 l6 offset-s2 offset-m2 offset-l3 center" style="">
                                    <img src="{{asset('images/TipoArchivo/IMAGE.PNG')}}" alt="" id="avatarImage" class=" responsive-img valign profile-image teal lighten-5" style="height: 100%; width: 100%">
                                  </div> 
                                  <div class="col s12" style="padding: 0px; padding-top:50px">
                                    <div class="btn">
                                      <span>File</span>
                                      <input type="file" id="url_imagen" name="url_imagen">
                                    </div>
                                    <div class="file-path-wrapper">
                                      <input class="file-path validate" type="text" name="imagen_name">
                                      <div class="errorTxt1" id="h_error1" style="color: red; font-size: 12px; font-style: italic;"></div>
                                    </div>
                                  </div>   
                                </div>                    
                              </div> 
                            </div> 
                        </div>
                    </div>
                    </div>

                    <div class="col m8 l8">
                    <div class="card white">
                        <div class="card-content">
                            <span class="card-title">Datos Generales</span> 
                            <div class="row"> 
                              <div class="col s12 center">
                                <div class="input-field col s12">
                                 <div id="estado" class="badge green lighten-5 green-text text-accent-4 col s12 m6 l4 offset-l8">
                                    <b>NO DISPONIBLE</b>
                                    <i class="material-icons"></i>
                                  </div>
                                </div>       
                                 <br>
                                {{-- <div class="col s12" style="padding-bottom: 10px; padding-top: 10px"> 
                                  <div class="input-field col s12 m6 l8">                                  
                                    <p>Ingrese el código del Libro para realizar el enlace con el botón</p>
                                  </div>                                    
                                  <div class="col s12 m6 l4">
                                    <label for="btn_idprod">Cod. Libro</label>
                                    <input id="btn_idprod" name="btn_idprod" type="text" data-error=".errorTxt2" maxlength="11" value="">
                                    
                                  </div> 
                                </div>    --}}    

                                <div class="input-field col s12">
                                  <i class="material-icons prefix">clear_all</i>
                                  <input id="titulo" name="titulo" type="text" data-error=".errorTxt2" maxlength="200">
                                  <label for="titulo">Título</label>
                                   <div class="errorTxt1" id="h_error2" style="color: red; font-size: 12px; font-style: italic;"></div>
                                </div>       
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">mode_edit</i>
                                  <textarea id="descripcion" name="descripcion" class="materialize-textarea" lenght="200" maxlength="200" value="" style="height: 100px"></textarea>
                                  <label for="descripcion" class="">Descripción</label>
                                </div>
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
@endsection

@section('script')
 
 
 <script>
	$('#guardarSeccion01').click(function(e){
	  e.preventDefault();    
	  var $Input, $myForm; 
       // $Input = $('#archivo');
        $myForm = $('#MyForm');  
		  var formData = new FormData();  
		  formData.append('imagenSec', $('#url_imagen')[0].files[0]); 
		  $.ajax({
				beforeSend: function (xhr) {
					 var token = $('meta[name="csrf-token"]').attr('content'); 
					 if (token) {
							 return xhr.setRequestHeader('X-CSRF-TOKEN', token);
					 }
				},
				url: "{{ url('/seccion01/grabar') }}" + '?' + $myForm.serialize(),
				method: 'POST',               
				data: formData,
				processData: false,
				contentType: false,

        success:function(data){
  
          if ( data[0] == "error") { 
            $('#h_error1').text('');  
						$('#h_error2').text(''); 
            ( typeof data.imagen != "undefined" )? $('#h_error1').text(data.imagen) : null; 
            ( typeof data.titulo != "undefined" )? $('#h_error2').text(data.titulo) : null;  
          } else { 
            setTimeout(function() {
              Materialize.toast('<span>Registro exitoso</span>', 1500);
            }, 100);
            window.location = "{{ url('/seccion1') }}";

          }

        },
				 error:function(){  
					 $('#h_error1').text('');  
						$('#h_error2').text(''); 
			 } 
		  }) 
	}); 
</script>

    
@endsection
