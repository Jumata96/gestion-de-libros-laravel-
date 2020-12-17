<script type="text/javascript">
	//---JMAZUELOS-24-06-2020----------------GRABAR-----------------------------
 
 $('#updCategoria').click(function(e){
	e.preventDefault(); 
	var data = $('#myForm').serializeArray();  
	$.ajax({
		url: "{{ url('/categoria-actualizar') }}",
		type:"POST",
		beforeSend: function (xhr) {
			 var token = $('meta[name="csrf-token"]').attr('content');

			 if (token) {
					 return xhr.setRequestHeader('X-CSRF-TOKEN', token);
			 }
		},
	  type:'POST',
	  url:"{{ url('/categoria-actualizar') }}",
	  data:data,

	  success:function(data){
		  
		  if ( data[0] == "error") {
			( typeof data.nombre != "undefined" )? $('#error1').text(data.nombre) && $('#nombre').focus() : null; 
			 ( typeof data.dsCorta != "undefined" )? $('#error3').text(data.dsCorta) : null; 
			// ( typeof data.nombre != "undefined" )? $('#error2').text(data.nombre) : null; 
						
		  } else {    
					    window.location="{{ url('/lstCategorias') }}";

		  }
		  
	  },

	  error:function(){ 
		  alert("error!!!!");
  }
  });  
 });    

</script>