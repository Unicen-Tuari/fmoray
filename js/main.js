$(document).ready(function(){
	$("#lnkPrincipal").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "principal.html",
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
			url: "soporte.html",
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
			url: "cableado.html",
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
			url: "camaras.html",
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
			url: "cartuchos.html",
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
			url: "precios.html",
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
	$(".lnkProducto").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "producto.html",
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
	$("#lnkJuego").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "juego.html",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
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

function enviarEinsertar(){
  var producto = $("#producto").val();
  var proceso = $("#proceso").val();
  var precio = $("#precio").val();
  var grupo = 37;
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
         alert('Deploy Success');
       },
       error:function(data){
         alert('No se pudo comunicar con el servidor');
       }
    });
  }
}