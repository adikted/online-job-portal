<!doctype html>
<html lang="en">
<head>
<title>JobKhoj&mdash; Online Job Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Job Application Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" href="css/j-forms.css">

<!-- /css files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

</head>
<body>
<h1 class="header-w3ls">Registration Form</h1>
<div class="content-w3ls">
	<div class="form-w3ls">
		<form action="" method="post">
			<div class="content-wthree1">
				<div class="grid-agileits1">
					<div class="form-control">
						<label class="header">Name <span>*</span></label>
						<input type="text" id="name" name="name" placeholder="Name" title="Please enter your Full Name" required="">
					</div>

					<div class="form-control">
						<label class="header">Email <span>*</span></label>
						<input type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a Valid Email Address" required="">
					</div>

					<div class="form-control">
						<label class="header">Password <span>*</span></label>
						<input type="password" id="name" name="password" placeholder="Password" title="Please enter Password" required="">
					</div>
				</div>
				<div class="form-control">
				<div class="main-row">
						<label class="header">State<span>*</span></label>
							<select name="country">
								<option value="none" selected="" disabled="">Select state</option>

								<option value="Haryana">Haryana</option>
								<option value="himachal Pradesh">Himachal Pradesh</option>
								<option value="Punjab">Punjab</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							</select>
							<i></i>

					</div>
					</div>
					<div class="form-control">
				<div class="main-row">
						<label class="header">What position are you applying for? <span>*</span></label>
							<select name="position">
								<option value="none" selected="" disabled="">Select postion</option>
								<option value="Ites/BPO">ITES / BPO</option>
								<option value="Healthcare">Healthcare</option>
								<option value="Engineering">Engineering</option>
								<option value="Hotel management">Hotel Management</option>
								<option value="Import/Export">Import/Export</option>
								<option value="Teaching">Teaching</option>
								<option value="Marketing">Marketing</option>
								<option value="Logistics">Logistics</option>
								<option value="Automobile">Automobile</option>
							</select>
							<i></i>

					</div>
					</div>
			</div>
			<div class="content-wthree2">
				<div class="grid-w3layouts1">
					<div class="w3-agile1">
						<label class="rating">What is your current employment status?<span>*</span></label>
						<ul>
							<li>
								<input type="radio" id="a-option" name="selector1">
								<label for="a-option">Employed </label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" name="selector1">
								<label for="b-option">Unemployed</label>
								<div class="check"><div class="inside"></div></div>
							</li>
							<li>
								<input type="radio" id="c-option" name="selector1">
								<label for="c-option">Self-Employed</label>
								<div class="check"><div class="inside"></div></div>
							</li>
							<li>
								<input type="radio" id="d-option" name="selector1">
								<label for="d-option">Student</label>
								<div class="check"></div>
							</li>
							<div class="clear"></div>
						</ul>
					</div>

				</div>

				<div class="clear"></div>
			</div>

				<div class="w3ls-btn">
					<div class="contact-forms">
					<label class="rating">Upload your resume</label>
						<label class="input append-small-btn">
								<div class="upload-btn">
									Upload
									<input type="file" name="file1" onchange="document.getElementById('file1_input').value = this.value;">
								</div>
						</label>
				<div class="wthreesubmitaits">
					<input type="submit" name="submit" value="Send">
				</div>
				</form>
					</div>
					<?php
					if(isset($_POST["submit"]))
					{
						  mysql_connect("localhost","root","");
							mysql_select_db("job");
							$queery="insert into employee_registration values('','$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[country]','$_POST[position]','$_POST[selector1]','$_POST[file1]')";
          mysql_query($queery);


					}
					?>
					</div>
	</div>

</div>

</body>
</html>
