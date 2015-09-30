$(document).ready(function(){
	$(".btnProducto").on("click",function(event){
		event.preventDefault();
		var id = $(this).val();
		$.ajax({
			type: "GET",
			dataType: "html",
			url: "index.php?action=verProducto&id=" + id,
			success: function(data){
				$("#content").html(data);
			},
			error: function(){
				alert("error");
			}
		})
	})
});




