</body>


</html> 

<script src="<?php echo URL;?>bootstrap/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo URL;?>public/js/div_load.js">
</script>
<script type="text/javascript">
$(function(){
	$('#submitform').submit(function(){

		var url= $(this).attr('action');
		var data= $(this).serialize();
		
		$.post(url,data,function(o){
			console.log(o+'tnhis is out put');
			if( o==true){
				console.log(o);
				
				$(location).attr("href","<?php echo URL.'aim_admin';?>");
			}
			else{
				console.log(o);

				$("#message").html('<p style="color:#ff7496">Wrong  password</p>');
			}
		});
		return false;
	});
});
  

</script>
<script type="text/javascript">
$(function(){
	$('#save_question').submit(function(){
		var url_save_question= $('#save_question').attr('action');
		var data_save_question= $('#save_question').serialize();
		 console.log(data_save_question);
		$.post(url_save_question,data_save_question,function(o){
			console.log(o+'tnhis is out put');
			if( o==true){
				console.log(o);
				
				//$(location).attr("href",base_url+'aim_admin/set_question');
			}
			else{
				console.log(o);

				$("#message").html('<p style="color:#ff7496">Oppsss....Error while Setting Up your quiz<br>Please Try again</p>');
			}
		});
		
	});
});
</script>