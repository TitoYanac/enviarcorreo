$(window).on("load",function(){

	$( "#gridCheck" ).click(function() {

		if($("#env").attr("disabled")===undefined){
			$("#env").attr("disabled",true);
		}else{
			$("#env").attr("disabled",false)
		}
	});
});