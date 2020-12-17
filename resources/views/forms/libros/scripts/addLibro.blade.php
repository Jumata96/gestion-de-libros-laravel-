<script type="text/javascript">
	//---JMAZUELOS-24-06-2020----------------GRABAR-----------------------------
 
 $('#addLibros').click(function(e){
	e.preventDefault(); 
	var data = $('#myForm').serializeArray();  
	$.ajax({
		url: "{{ url('/libros/grabar') }}",
		type:"POST",
		beforeSend: function (xhr) {
			 var token = $('meta[name="csrf-token"]').attr('content');

			 if (token) {
					 return xhr.setRequestHeader('X-CSRF-TOKEN', token);
			 }
		},
	  type:'POST',
	  url:"{{ url('/libros/grabar') }}",
	  data:data,

	  success:function(data){
		  
		  if ( data[0] == "error") {
			( typeof data.nombre != "undefined" )? $('#error1').text(data.nombre) && $('#nombre').focus() : null;
			 ( typeof data.ISBM != "undefined" )? $('#error2').text(data.ISBM) : null;
			 ( typeof data.precio != "undefined" )? $('#error3').text(data.precio) : null;
			 ( typeof data.ejemplares != "undefined" )? $('#error4').text(data.ejemplares) : null;
			 ( typeof data.paginas != "undefined" )? $('#error5').text(data.paginas) : null;
			 ( typeof data.Idioma != "undefined" )? $('#error6').text(data.Idioma) : null;
			 ( typeof data.idCategoria != "undefined" )? $('#error7').text(data.idCategoria) : null;
			 ( typeof data.idEditorial != "undefined" )? $('#error8').text(data.idEditorial) : null;
			 ( typeof data.glosa != "undefined" )? $('#error9').text(data.glosa) : null; 
						
		  } else {    
			 window.location="{{ url('/lstLibros') }}";

		  }
		  
	  },

	  error:function(){ 
		  alert("error!!!!");
  }
  });  
 });    

</script>