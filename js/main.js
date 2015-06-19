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