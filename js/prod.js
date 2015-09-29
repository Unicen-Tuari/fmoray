$(document).ready(function(){
	$(".btnProducto").on("click",function(event){
		event.preventDefault();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=verProducto&",
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});