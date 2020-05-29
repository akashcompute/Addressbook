<?php include('core/init.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akash Phone Book| Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
		<div class="large-6 columns">
			<h1 class="solid">Akash Phone Book</h1>
		</div>
		
		<div class="large-6 columns">
			<a class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
			<div id="addModal" class="reveal-modal" data-reveal>
				<h2>Add Contact</h2>
				<form id="addContact" action="#" method="post">
						  <div class="row">
							<div class="large-6 columns">
							  <label>First Name
								<input name="first_name" type="text" placeholder="Enter First Name" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Last Name
								<input name="last_name" type="text" placeholder="Enter Last Name" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>Email
								<input name="email" type="email" placeholder="Enter Email Address" />
							  </label>
							</div>
							<div class="large-4 columns">
							  <label>Phone Number
								<input name="phone" type="text" placeholder="Enter Phone Number" />
							  </label>
							</div>
							<div class="large-4 columns">
								<label>Contact Group
									<select name="contact_group">
										<option disabled>Contact Group</option>
										<option value="husker">Family</option>
										<option value="starbuck">Friends</option>
										<option value="hotdog">Business</option>
									</select>
								</label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-6 columns">
							  <label>Address 1
								<input name="address1" type="text" placeholder="Enter Address 1" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Address 2
								<input name="address2" type="text" placeholder="Enter Address 2" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>City
								<input name="city" type="text" placeholder="Enter City" />
							  </label>
							</div>
							<div class="large-4 columns">
								<label>State
								<select name="state">
									<option disabled>Select State</option>
									<option value=”Andhra Pradesh”>Andhra Pradesh</option>
									<option value=”Andaman and Nicobar Islands”>Andaman and Nicobar Islands</option>
									<option value=”Arunachal Pradesh”>Arunachal Pradesh</option>
									<option value=”Assam”>Assam</option>
									<option value=”Bihar”>Bihar</option>
									<option value=”Chandigarh”>Chandigarh</option>
									<option value=”Chhattisgarh”>Chhattisgarh</option>
									<option value=”Dadar and Nagar Haveli”>Dadar and Nagar Haveli</option>
									<option value=”Daman and Diu”>Daman and Diu</option>
									<option value=”Delhi”>Delhi</option>
									<option value=”Lakshadweep”>Lakshadweep</option>
									<option value=”Puducherry”>Puducherry</option>
									<option value=”Goa”>Goa</option>
									<option value=”Gujarat”>Gujarat</option>
									<option value=”Haryana”>Haryana</option>
									<option value=”Himachal Pradesh”>Himachal Pradesh</option>
									<option value=”Jammu and Kashmir”>Jammu and Kashmir</option>
									<option value=”Jharkhand”>Jharkhand</option>
									<option value=”Karnataka”>Karnataka</option>
									<option value=”Kerala”>Kerala</option>
									<option value=”Madhya Pradesh”>Madhya Pradesh</option>
									<option value=”Maharashtra”>Maharashtra</option>
									<option value=”Manipur”>Manipur</option>
									<option value=”Meghalaya”>Meghalaya</option>
									<option value=”Mizoram”>Mizoram</option>
									<option value=”Nagaland”>Nagaland</option>
									<option value=”Odisha”>Odisha</option>
									<option value=”Punjab”>Punjab</option>
									<option value=”Rajasthan”>Rajasthan</option>
									<option value=”Sikkim”>Sikkim</option>
									<option value=”Tamil Nadu”>Tamil Nadu</option>
									<option value=”Telangana”>Telangana</option>
									<option value=”Tripura”>Tripura</option>
									<option value=”Uttar Pradesh”>Uttar Pradesh</option>
									<option value=”Uttarakhand”>Uttarakhand</option>
									<option value=”West Bengal”>West Bengal</option>									
								</select>
							  </label>
							</div>
							<div class="large-4 columns">
								<label>Zipcode
								<input name="zipcode" type="text" placeholder="Enter Phone Number" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-12 columns">
							  <label>Notes
								<textarea name="notes" placeholder="Enter Optional Notes"></textarea>
							  </label>
							</div>
						  </div>
						  <input name="submit" type="submit" class="add-btn button right small" value="Submit">
							<a class="close-reveal-modal">&#215;</a>
						</form>
			</div>
		</div>
	</div>
	<div class="top-bar" id="example-menu">
  <div class="top-bar">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>
  
	<!-- Loading Image -->
	<div id="loaderImage">
		<img src="img/loader.gif">
	</div>
	
	<!-- Main Content-->
	<div id="pageContent"></div>
	
    <script src="js/vendor/jquery.js"></script>
	<script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
