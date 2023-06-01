<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<link rel="stylesheet" href="A/libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="A/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="A/libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="A/assets/css/bootstrap.css">
	<link rel="stylesheet" href="A/assets/css/core.css">
	<link rel="stylesheet" href="A/assets/css/misc-pages.css">

</head>
<body class="simple-page">
	<div id="back-to-home">
		<a href="home.php" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			
				<span style="color: white"><i class="fa fa-gg"></i></span>
				<span style="color: white">El Bassaair Clinic</span>
			
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Sign Up </h4>



	<form method="post" onsubmit="myaction.collect_data(event, 'signup')">  


		<div class="form-group">
			<input  type="text" class="form-control" placeholder="First Name" name="firstname" required="true">
		</div>
		<div><small class="js-error js-error-firstname text-danger"></small></div>

 
      <div class="form-group">
			<input  type="text" class="form-control" placeholder="Last Name" name="lastname" required="true">
		</div>
		<div><small class="js-error js-error-lastname text-danger"></small></div>


		<div class="form-group">
			  <span class="input-group-text" id="basic-addon1"><i class="bi bi-gender-ambiguous"></i></span>
			  <select class="form-select" name="gender">
			  	  <option selected value="">--Select Gender--</option>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
			  </select>
			</div>
			<div><small class="js-error js-error-gender text-danger"></small></div>

 
			
			
			
			<div class="form-group">
			<input  type="text" class="form-control" placeholder="city" name="city" required="true">
		</div>
		<div><small class="js-error js-error-email text-danger"></small></div>




		
		<div class="form-group">
			<input  type="date" class="form-control" placeholder="birthday" name="birthday" required="true">
		</div>
		<div><small class="js-error js-error-email text-danger"></small></div>





		<div class="form-group">
			<input  type="text" class="form-control" placeholder="phone_numbre" name="phone_numbre" required="true">
		</div>
		<div><small class="js-error js-error-email text-danger"></small></div>






		<div class="form-group">
			<input  type="email" class="form-control" placeholder="Email" name="email" required="true">
		</div>
		<div><small class="js-error js-error-email text-danger"></small></div>




		
		
		

		<div class="form-group">
			<input  type="password" class="form-control" placeholder="Password" name="password" required="true">
		</div>
		<div><small class="js-error js-error-password text-danger"></small></div>

           <div class="form-group">
			  <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
			  <input name="retype_password" type="password" class="form-control p-3" placeholder="Retype Password" >
			</div>




      
			<div class="progress mt-3 d-none">
			  <div class="progress-bar" role="progressbar" style="width: 50%;" >Working... 25%</div>
			</div>

      

     

		

		<input type="submit" class="btn btn-primary" value="Register" name="submit">
		
	
	  </form>
<hr  />
	
	     <p>
	    	<small>Do you have an account ?</small>
	    	<a href="login.php">SIGN IN</a>
      	</p>
	  
	
	
</body>
</html>

<script>
	
	var myaction  = 
	{
		collect_data: function(e, data_type)
		{
			e.preventDefault();
			e.stopPropagation();

			var inputs = document.querySelectorAll("form input, form select");
			let myform = new FormData();
			myform.append('data_type',data_type);

			for (var i = 0; i < inputs.length; i++) {

				myform.append(inputs[i].name, inputs[i].value);
			}

			myaction.send_data(myform);
		},

		send_data: function (form)
		{

			var ajax = new XMLHttpRequest();

			document.querySelector(".progress").classList.remove("d-none");

			//reset the prog bar
			document.querySelector(".progress-bar").style.width = "0%";
			document.querySelector(".progress-bar").innerHTML = "Working... 0%";

			ajax.addEventListener('readystatechange', function(){

				if(ajax.readyState == 4)
				{
					if(ajax.status == 200)
					{
						//all good
						myaction.handle_result(ajax.responseText);
					}else{
						console.log(ajax);
						alert("An error occurred");
					}
				}
			});

			ajax.upload.addEventListener('progress', function(e){

				let percent = Math.round((e.loaded / e.total) * 100);
				document.querySelector(".progress-bar").style.width = percent + "%";
				document.querySelector(".progress-bar").innerHTML = "Working..." + percent + "%";
			});

			ajax.open('post','ajax.php', true);
			ajax.send(form);
		},

		handle_result: function (result)
		{
			console.log(result);
			var obj = JSON.parse(result);
			if(obj.success)
			{
				alert("Profile created successfully");
				window.location.href = 'login.php';
			}else{

				//show errors
				let error_inputs = document.querySelectorAll(".js-error");

				//empty all errors
				for (var i = 0; i < error_inputs.length; i++) {
					error_inputs[i].innerHTML = "";
				}

				//display errors
				for(key in obj.errors)
				{
					document.querySelector(".js-error-"+key).innerHTML = obj.errors[key];
				}
			}
		}
	};

</script>
