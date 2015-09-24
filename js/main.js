// FUNCIONES PARA CARGAR LOS TPL CON AJAX 

$(document).ready(function(){
	$("#lnkPrincipal").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=principal",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});

$(document).ready(function(){
	$("#lnkSoporteTecnico").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=soporte",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});

$(document).ready(function(){
	$("#lnkCableado").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=redes",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});

$(document).ready(function(){
	$("#lnkCamaras").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=camaras",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});

$(document).ready(function(){
	$("#lnkCartuchos").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=cartuchos",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});

$(document).ready(function(){
	$("#lnkPrecios").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=lista",
			success: function(data){
				$("#content").html(data);
				var grupo = 62;
				$.ajax({
					 type: "GET",
					 dataType: 'JSON',
					 url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
					 success: function(data){
					    var producto = "";
					    var proceso = "";
					    var precio = "";
					    for (var i = 0; i < data.information.length; i++) {
					         producto = data.information[i]['thing'][0];
					         proceso = data.information[i]['thing'][1];
					         precio = data.information[i]['thing'][2];
					         $("#infoTabla").append("<tr><td>" + producto + "</td><td>" + proceso + "</td><td>" + precio + "</td></tr>");
					    }
				   
				     }
				});
			},
			error: function(){
				alert("error");
			}
		})
	})
});

$(document).ready(function(){
	$(".lnkProducto").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=productos",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});

$(document).ready(function(){
	$("#lnkAdmin").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=admin",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});

// FUNCION PARA CARGAR DATOS AL APIREST Y AGREGARLOS A LA TABLA PRECIOS
$(document).ready(function(){

function enviarEinsertar(){
  if (document.formPass.password.value=="1234"){
  var producto = $("#producto").val();
  var proceso = $("#proceso").val();
  var precio = $("#precio").val();
  var grupo = 62;
  var informacion = [producto, proceso, precio];
  var info = {
      "group": grupo,
      "thing": informacion
      };

	  if (grupo && informacion){
	    $.ajax({
	       type: "POST",
	       dataType: 'JSON',
	       data: JSON.stringify(info),
	       contentType: "application/json; charset=utf-8",
	       url: "http://web-unicen.herokuapp.com/api/create",
	       success: function(data){
	         
                    $(document).ready(function(){
						$.ajax({
							type: "GET",
							dataType: "html",
							url: "precios.html",
							success: function(data){
								$("#content").html(data);
								var grupo = 62;
								$.ajax({
									 type: "GET",
									 dataType: 'JSON',
									 url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
									 success: function(data){
									    var producto = "";
									    var proceso = "";
									    var precio = "";
									    for (var i = 0; i < data.information.length; i++) {
									         producto = data.information[i]['thing'][0];
									         proceso = data.information[i]['thing'][1];
									         precio = data.information[i]['thing'][2];
									         $("#infoTabla").append("<tr><td>" + producto + "</td><td>" + proceso + "</td><td>" + precio + "</td></tr>");
									    }
								   
								     }
								});
							},
							error: function(){
								alert("error");
							}				
						})
					});

	       },
	       error:function(data){
	         alert('No se pudo comunicar con el servidor');
	       }
	    });
	  }
  }
  else{
  	alert("Error Contraseña. Intenta de nuevo.")
  }
}
$("#btnAgregar").on("click",function(event){
	enviarEinsertar();
})	
});
//----------------------------JUEGO---------------------------------//

/* 	Dados de diferente cantidades de caras (en el código se indican la cantidad de caras de 
cada dado).  
	Cantidad de dados variable (numero leido de un input al comenzar el juego) 

	Sumar los dados 
*/

"use strict";

var caras =[3,4,5,6,7,8];

function tirarDados() {
  	var num = Math.floor(Math.random()*( caras[Math.floor(Math.random()*6)] ))+1;
  	return num;
}

function tirarMuchosDados(){
	  var resultado = [];
	  var suma = 0;
	  for (var i = 0; i < document.getElementById('cantidadDados').value; i++) {
	  	resultado.push(tirarDados());
	  }
	  $('#nptValores').val(resultado);
	  for (var x = 0; x < resultado.length; x++){
	  	suma += resultado[x];
	  }
	  $("#nptSuma").val(suma);
}

