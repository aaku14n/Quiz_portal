$(function(){
	$('#set_quiz').submit(function(){

		var url= $(this).attr('action');
		var data= $(this).serialize();
		
		$.post(url,data,function(o){
			console.log(o+'tnhis is out put');
			if( o==true){
				console.log(o);
				
				$(location).attr("href",base_url+'aim_admin/set_question');
			}
			else{
				console.log(o);

				$("#message").html('<p style="color:#ff7496">Oppsss....Error while Setting Up your quiz<br>Please Try again</p>');
			}
		});
		return false;
	});
});
