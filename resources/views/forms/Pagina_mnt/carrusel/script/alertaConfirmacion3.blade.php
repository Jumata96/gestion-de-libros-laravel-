<div id="confirmacion3_carrucel{{$datos->id}}" class="modal" style="width: 500px">
	<div class="modal-content indigo white-text center">
		<p>Está seguro que desea habilitar este registro ?</p>
	</div>
	<div class="modal-footer indigo lighten-4">
		<a href="#" class="waves-effectwaves-light btn-flat modal-action modal-close">Cancelar</a>
		<a href="{{url('/carrusel/habilitar')}}/{{$datos->id}}"class="waves-effect waves-light btn-flat modal-action modal-close" >Aceptar</a>
	</div>
</div>
