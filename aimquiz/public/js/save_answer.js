function save_answer(){
	var qus = document.getElementById('qno').value;
	if(document.getElementById('op1').checked)
	var ans = document.getElementById('op1').value;
	if(document.getElementById('op2').checked)
		var ans = document.getElementById('op2').value;
		if(document.getElementById('op3').checked)
		var ans = document.getElementById('op3').value;
		if(document.getElementById('op4').checked)
		var ans = document.getElementById('op4').value;
	console.log(ans);
	var string = 'question='+ qus +'&answer='+ ans +'';
	$.ajax({
		type: "POST",
		url: "http://localhost/aimquiz/model/save_answer.php",
		data: string,
		chache : false,
		success : function(result){
			alert(result);
		}
	});

}