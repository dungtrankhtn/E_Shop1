$(document).ready(function(){
	$(".updatecart").click(function(){
		var rowid = $(this).attr('id');
		var qty = $(this).parent().parent().find(".qty").val();
		var token = $("input[name='_token']").val();
		alert(token)
	});
});