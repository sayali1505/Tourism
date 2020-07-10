	
	$(document).ready(function() {
	$("#state").change(function() {
	var st_id = $(this).val();
	if(st_id != " ") {
	$.ajax({
	url:"get_location.php",
	data:{s_id:st_id},
	type:'POST',
	success:function(response) {
	var resp = $.trim(response);
	$("#location").html(resp);
	}
	});
	} else {
	$("#location").html("<option value=''>------- Select --------</option>");
	}
	});
	});

