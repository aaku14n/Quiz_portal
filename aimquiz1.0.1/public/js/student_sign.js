function student_sign() {
  var roll = document.getElementById('roll').value;
  var pass = document.getElementById('password').value;
console.log(pass);
var dataString = 'roll='+ roll +  '&password='+ pass +'' ;
      
  $.ajax({
type: "POST",
url: "model/student_sign.php",
data: dataString,
cache: false,
success: function(result){

if (result == 1) 
	{ alert('true'+result);
		window.location = 'http://localhost/aimquiz/aaku'; }
else 
	alert('false'+result);
}
});
}