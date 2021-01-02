 <!-- Modal Structure -->
          <div id="modalAddLibro" class="modal modal-fixed-footer">
            <div class="card" style="position: fixed; width: 100%; z-index: 2">                 
              <div class="card-header">                    
                <i class="fa fa-table fa-lg material-icons">receipt</i>
                <h2>AGREGAR IMAGENES A LIBRO </h2>
              </div>
            </div>
            <form  id="myFormLibro" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="row card-header sub-header" style="margin-top: 3.15rem; margin-left: 0rem; margin-right: 0rem; position: fixed; width: 100%; z-index: 3">
              <div class="col s12 m12 herramienta">                         
                <a id="addLibroImagenes" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped" data-position="top" data-delay="500" data-tooltip="Guardar">
                  <i class="material-icons " style="color: #2E7D32">check</i></a>
                <a style="margin-left: 6px"></a>  

                <a href="#" id="" class="btn-floating right waves-effect waves-light grey lighten-5 tooltipped modal-close" data-activates="dropdown2" data-position="top" data-delay="500" data-tooltip="Regresar">
                  <i class="material-icons" style="color: #424242">keyboard_tab</i></a>  
              </div>   
            </div> 
            <div class="modal-content"> 
              
              <input type="hidden" name="libro_id_add"  id="libro_id_add" value="{{$libro->codigo}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">


              <h4></h4><br><h4></h4><br>                 
                <div class="row cuerpo">
                  <div class="col s12 m12 l12"> 
                    <br>
                                                             <div class="col s12 m12 l12 ">
                                        <div class="collapsible-header light-blue light-blue-text text-lighten-5 active">
                                          <i class="material-icons">attach_file</i>
                                          IMAGENES DEL LIBRO
                                        </div>
                                        <div class="card white">
                                          <div class="card-content">
                                                        <div class="row" style="padding-bottom: 0px; margin-bottom: 0px">
                                                          <div class="col s12 m12 l12" style="padding-bottom: 10px">
                                                            <p>Seleccione las imágenes para realizar la importación masiva</p>
                                                          </div>
                                                          <div class="col s12">
                                                            <div class="file-field input-field col s12 "> 
                                                                <div class="file-path-wrapper">
                                                                  <input class="file-path validate" type="text" name="file_name" id="file_name"> 

                                                                  <div class="btn light-blue darken-1 col l12 s12">
                                                                    <span>CARGAR</span>
                                                                    <input type="file" id="archivos" name="archivos" multiple="">
                                                                  </div>

                                                                  <p class="right"><i>Solo se permiten imágenes con extención JPG PNG </i></p>
                                                                  <div class="errorTxt1" id="h_error10" style="color: red; font-size: 12px; font-style: italic;"></div>
                                                                </div>
                                                                

                                                            </div>
                                                          </div>
                                                          {{-- <div class="col s12 mt-2 mb-2">
                                                            <button type="submit" class="waves-effect waves-light btn right indigo darken-2" >
                                                              <i class="material-icons left">file_upload</i> CARGAR
                                                            </button>
                                                          </div> --}}
                                                        </div>
                                          </div>
                                        </div>
                                      </div>       
                </div> 
                </div> 
              </form>
            </div> 
          </div>
