<div id="confirmacion_{{$img->codigo }}" class="modal" style="width: 500px">
	<div class="modal-content indigo white-text center">
	  <p>Está  seguro que desea habilitar este registro ?</p>
	</div>
	<div class="modal-footer indigo lighten-4">
		<a href="#" class="waves-effectwaves-light btn-flat modal-action modal-close">Cancelar</a>
	  <a  href="{{url('/libros/elimnar-imagenes')}}/{{$img->codigo }}/{{$libro->codigo}}"  class="waves-effect waves-light btn-flat modal-action modal-close" id="h{{$img->codigo }}" data-idcliente="{{$img->codigo }}">Aceptar</a>
	</div>
 </div>



 

 
