<script type="text/javascript">
      //---JPaiva-13-08-2018----------------GRABAR-----------------------------
 
    $('#updateCon').click(function(e){
      e.preventDefault(); 
      var data = $('#myForm').serializeArray();  
     console.log(data);
      $.ajax({
            url: "{{ url('/Contactos/actualizar') }}",
            type:"POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf-token"]').attr('content');

                if (token) {
                      return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
           type:'POST',
           url:"{{ url('/Contactos/actualizar') }}",
           data:data,

           success:function(data){      
              if ( data[0] == "error") { 
                ( typeof data.correo != "undefined" )? $('#h_error1').text(data.correo) : null;
                ( typeof data.telefono  != "undefined" )? $('#h_error2').text(data.telefono ) : null;
              } else {  
               
                //window.location="{{ url('/contactanos') }}";
                setTimeout(function() {
                  Materialize.toast('<span>Registro actualizado</span>', 1500);
                }, 100);  

              }
           },
           error:function(){ 
              alert("error!!!!");
        }
      });


    });    

</script>