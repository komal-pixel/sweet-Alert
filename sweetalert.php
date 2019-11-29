<!DOCTYPE html>
<html>
<head>
	<title>sweet alert demo</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="container">
		<label>Name:</label><br>
		<input class="form control" type="text" id="name"><br>
		<label>Password:</label><br>
		<input class="form control" type="password" id="password"><br><br>
		<button class="btn btn-success" onclick="validation();">submit</button>
			<!-- for Demo -->
		<!-- <button class="btn btn-warning" id="mybtn" onclick="button();">Delete</button> -->
	</div>
	<script>
		function validation(){
			var Uname="komal-pixel";
			var pass="1234";
			var name=document.getElementById('name').value;
			var pwd=document.getElementById('password').value;
			if(Uname == name && pass==pwd){
				swal('',"good job", "success");
			}
			else{
				swal('',"Oops!", "error");
			}
		}
		// for demo
		// function button(){
		// 	document.getElementById('#mybtn');
		// 	swal('',"good job",'question');

		// }
	</script>
</body>
</html>