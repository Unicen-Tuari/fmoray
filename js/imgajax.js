$(".botonAgregarImagenes").on("click", function(event){
        event.preventDefault();
        var archivos = $("#imagesToUpload").prop('files');

        if(typeof(archivos) == 'undefined'){
            alert("No pusiste imagenes");
            return;
        }

        var datos = new FormData();

        $.each(archivos, function(key,value){
            datos.append(key,value);
        });
        
        $.ajax({
          type: "POST",
          data: datos,
          contentType : false,
          processData : false,
          url: event.target.href,
          success: function(data){
            $("body").html(data);
          },
          error: function(){
            alert('4');
          }
          
        });

});

// "index.php?action=agregarImagenes&id_producto={$producto['id_producto']}"