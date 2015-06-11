
<?php
include 'header.php';
?>

<body>
<?php include_once("analyticstracking.php") ?>
	
	<!-- MAIN -->
	<title> Contact </title> 
	<div role="main" id="main">
		<div class="wrapper">
		
			<!-- page-content -->
			<div class="page-content">			
			
				<h2 class="heading">Send Us An Email</h2>
				<!-- form -->			
				<form id="contactForm" method="post" name="myemailform" action="form-to-email.php">
					<fieldset>
						<p>
							<label for='name'>Enter Name: </label><br>
							<input type="text" name="name" class="form-poshytip" >
						</p>
						<p>
							<label for='email'>Enter Email Address:</label><br>
							<input type="text" name="email">
						</p>
						<p>
							<label for='message'>Enter Message:</label> <br>
							<textarea name="message" rows="5" cols="20" class="form-poshytip" ></textarea>
						</p>
						<input type="submit" name='submit' value="submit">
					</fieldset>
				</form>
				<script language="JavaScript">
				// Code for validating the form
				// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
				// for details
				var frmvalidator  = new Validator("myemailform");
				frmvalidator.addValidation("name","req","Please provide your name"); 
				frmvalidator.addValidation("email","req","Please provide your email"); 
				frmvalidator.addValidation("email","email","Please enter a valid email address"); 
				</script>
					
			<div class="c-1"></div>
			<div class="c-2"></div>
			<div class="c-3"></div>
			<div class="c-4"></div>	
			</div><!-- ENDS page-content -->
			
	  
	  
	  </div>
	</div>
	<!-- ENDS MAIN -->
	
	
<?php
include 'footer.php';
?>
<?php
include 'javascript.php';
?>
</body>
</html>