 <script>
	$('#addLibros').click(function(e){
	  e.preventDefault();
	  var $Input, $myForm;
       // $Input = $('#archivo');
        $myForm = $('#myForm');
		  var formData = new FormData();
				var archivos =$('#archivo')[0].files;
				console.log( archivos.length );
				for (var i = 0; i < archivos.length; i++) {
								formData.append('archivo'+i, $('#archivo')[0].files[i]);
				}
								formData.append('imagenes_mun', archivos.length);

								formData.append('caratula', $('#caratula')[0].files[0]);



		   
		  $.ajax({
				beforeSend: function (xhr) {
					 var token = $('meta[name="csrf-token"]').attr('content');
					 if (token) {
							 return xhr.setRequestHeader('X-CSRF-TOKEN', token);
					 }
				},
				url: "{{ url('/libros/grabar') }}" + '?' + $myForm.serialize(),
				method: 'POST',
				data: formData,
				processData: false,
				contentType: false,

        success:function(data){

          if ( data[0] == "error") {
            $('#h_error1').text('');
            ( typeof data.nombre != "undefined" )? $('#error1').text(data.nombre) && $('#nombre').focus() : null;
												( typeof data.ISBM != "undefined" )? $('#error2').text(data.ISBM) : null;
												( typeof data.precio != "undefined" )? $('#error3').text(data.precio) : null;
												( typeof data.ejemplares != "undefined" )? $('#error4').text(data.ejemplares) : null;
												( typeof data.paginas != "undefined" )? $('#error5').text(data.paginas) : null;
												( typeof data.Idioma != "undefined" )? $('#error6').text(data.Idioma) : null;
												( typeof data.idCategoria != "undefined" )? $('#error7').text(data.idCategoria) : null;
												( typeof data.idEditorial != "undefined" )? $('#error8').text(data.idEditorial) : null;
												( typeof data.glosa != "undefined" )? $('#error9').text(data.glosa) : null;
												( typeof data.caratula != "undefined" )? $('#h_error1').text(data.caratula) : null; 

          } else {
            setTimeout(function() {
              Materialize.toast('<span>Registro exitoso</span>', 1500);
            }, 100);
            window.location="{{ url('/lstLibros') }}";

          }

        },
				 error:function(){
					 $('#h_error1').text('');
						$('#h_error2').text('');
			 }
		  })
	});
</script>
