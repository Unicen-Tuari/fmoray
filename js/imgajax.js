// FUNCION PARA SUBIR IMAGENES CON AJAX
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
            alert('error');
          }
          
        });

});

/*
$("#form_categorias").on("submit", function(event){
    event.preventDefault();
      
    var datos = new FormData(this);


    $.ajax({
      type: "POST",
      data: datos,
      dataType: "html",
      contentType : false,
      processData : false,
      url: "index.php?action=categoriaNueva",
      success: function(data){
        $("#content").html(data);
      },
      error: function(){
        alert('error');
      }
      
    });

});
*/