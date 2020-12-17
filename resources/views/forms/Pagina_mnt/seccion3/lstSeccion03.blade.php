@extends('layouts2.app')
@section('titulo','seccion03')

@section('main-content') 

<div class="row">
	<br>
	<div class="col s12 m12 l12">
					  <div class="card">
						 <div class="card-header">                    
							<i class="fa fa-table fa-lg material-icons">receipt</i>
							<h2>SECCI&Oacute;N 03  - Logos</h2>
						 </div>
						
						 <div class="card-header" style="height: 50px; padding-top: 5px; background-color: #f6f6f6">
								 <div class="col s12 m12">
									<a class="btn-floating waves-effect waves-light grey lighten-5 tooltipped" href="{{ url('seccion03-nuevo') }}" data-position="top" data-delay="500" data-tooltip="Nuevo">
									  <i class="material-icons" style="color: #03a9f4">add</i>
									</a>
									<a style="margin-left: 6px"></a>                          
																			  
								 </div>  
								    
						 </div>
												 
						 <div class="row cuerpo">
							<?php 
 
							  $bandera = false;
 
							  if (count($inicio_seccion_det03) > 0) {
								 # code...
								 $bandera = true;
								 $i = 0;
							  }
 
							?>
 
						 <br>
						 <div class="row">
							<div class="col s12 m12 l12">
							  
								 <div class="card-content">
									Existen <?php echo ($bandera)? count($inicio_seccion_det03) : 0; ?> registros. <br><br>
									<table id="data-table-simple" class="responsive-table display centered" cellspacing="0">
										  <thead>
											  <tr>
												  <th>#</th> 
												  <th>Imagen</th>
                          <th>Titulo</th> 
                          <th>Fecha creación</th>
												  <th>Estado</th>
												  <th>Acción</th>
											  </tr>
										  </thead>
										  <?php
												 if($bandera){                                                           
											?>
										  <tfoot>
											  <tr>
												  <th>#</th> 
												  <th>Imagen</th>
                          <th>Titulo</th> 
                          <th>Fecha creación</th>
												  <th>Estado</th>
												  <th>Acción</th>
											  </tr>
											</tfoot>
 
										  <tbody>
											<tr>
											  <?php 
													foreach ($inicio_seccion_det03 as $datos) {
													$i++;
													$e=0; 
												?>
                            <td><?php echo $i; ?></td>
                            <td class="center">
                            <img src="{{asset('/storage/'.$datos->url_file)}}" alt="" class="circle responsive-img valign profile-image teal lighten-5" style="height: 50px; width: 50px">
                          </td> 
														<td>{{$datos->titulo}}</td> 
														<td>{{$datos->fecha_creacion}}</td> 
														<td>
														@if($datos->estado == 2)
														<div id="u_estado" class="chip center-align"  >
																<b>NO DISPONIBLE</b>
															<i class="material-icons"></i>
														</div>
														@else
														<div id="u_estado2" class="chip center-align teal accent-4 white-text" style="width: 70%">
															<b>ACTIVO</b>
															<i class="material-icons"></i>
														</div>
														@endif
												  </td>
												  <td class="center" style="width: 9rem">
													 <a href="{{ url('/seccion03-mostrar') }}-{{$datos->codigo}}" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped" data-position="top" data-delay="500" data-tooltip="Ver">
													  <i class="material-icons" style="color: #7986cb ">visibility</i>
													</a>                                       
													 <a href="#confirmacion{{$i}}" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped modal-trigger" data-position="top" data-delay="500" data-tooltip="Eliminar">
													  <i class="material-icons" style="color: #dd2c00">remove</i>
													</a>
													@if($datos->estado == 1)                                      
													 <a href="#h_confirmacion2{{$datos->codigo}}" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped modal-trigger" data-position="top" data-delay="500" data-tooltip="Desabilitar">
													  <i class="material-icons" style="color: #757575 ">clear</i></a>
													 @else
													 <a href="#h_confirmacion3{{$datos->codigo}}" class="btn-floating waves-effect waves-light grey lighten-5 tooltipped modal-trigger" data-position="top" data-delay="500" data-tooltip="Habilitar">
													  <i class="material-icons" style="color: #2e7d32 ">check</i></a>
													 @endif
												  </td>
											  </tr>  
											  @include('forms.Pagina_mnt.seccion3.scripts.alertaConfirmacion') 
											  @include('forms.Pagina_mnt.seccion3.scripts.alertaConfirmacion2') 
											  @include('forms.Pagina_mnt.seccion3.scripts.alertaConfirmacion3') 

											  <?php }} ?>
										  </tbody>
									  </table>
									</div>
							
						 </div>
 
						 </div>
					  </div>
					</div>
 </div>


 
@endsection

 
