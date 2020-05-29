<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("SELECT * FROM `contacts`");

//Assign Result Set
$contacts = $db->resultset();
?>
<div class="row">
		<div class="large-12 columns">
			<table>
				<thead>
					<tr>
						<th width="200">Name</th>
						<th width="130">Phone</th>
						<th width="200">Email</th>
						<th width="250">Address</th>
						<th width="100">Group</th>
						<th width="150">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($contacts as $contact) : ?>
					<tr>
						<td><a href="contact.html"><?php echo $contact->first_name.' '.$contact->last_name; ?></a></td>
						<td><?php echo $contact->phone; ?></td>
						<td><?php echo $contact->email; ?></td>
						<td>
						<ul>
							<li><?php echo $contact->address1; ?></li>
							<li><?php if($contact->address2) echo $contact->address2; ?></li>
							<li><?php echo $contact->city; ?>, <?php echo $contact->state; ?> <?php echo $contact->zipcode; ?></li>
						</ul>
						</td>
						<td><?php echo $contact->contact_group; ?></td>
						<td>
							<ul class="button-group">
								<li>
									<a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a>
									<div id = "editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
										<h2>Edit Contact</h2>
						<form id="editContact" action="#" method="post">
						  <div class="row">
							<div class="large-6 columns">
							  <label>First Name
								<input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name; ?>" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Last Name
								<input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name; ?>" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>Email
								<input name="email" type="email" placeholder="Enter Email Address" value="<?php echo $contact->email; ?>" />
							  </label>
							</div>
							<div class="large-4 columns">
							  <label>Phone Number
								<input name="phone" type="text" placeholder="Enter Phone Number" value="<?php echo $contact->phone; ?>" />
							  </label>
							</div>
							<div class="large-4 columns">
								<label>Contact Group
									<select name="contact_group">
										<option value="Family" <?php if($contact->contact_group == 'Family'){echo 'selected';} ?>>Family</option>
										<option value="Friends" <?php if($contact->contact_group == 'Friends'){echo 'selected';} ?>>Friends</option>
										<option value="Business" <?php if($contact->contact_group == 'Business'){echo 'selected';} ?>>Business</option>
									</select>
								</label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-6 columns">
							  <label>Address 1
								<input name="address1" type="text" placeholder="Enter Address 1" value="<?php echo $contact->address1; ?>" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Address 2
								<input name="address2" type="text" placeholder="Enter Address 2" value="<?php echo $contact->address2; ?>" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>City
								<input name="city" type="text" placeholder="Enter City" value="<?php echo $contact->city; ?>" />
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
								<input name="zipcode" type="text" placeholder="Enter Zipcode" value="<?php echo $contact->zipcode; ?>" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-12 columns">
							  <label>Notes
								<textarea name="notes" placeholder="Enter Optional Notes"><?php echo $contact->notes; ?></textarea>
							  </label>
							</div>
						  </div>
						  <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
						  <input name="submit" type="submit" class="add-btn button right small" value="Submit">
							<a class="close-reveal-modal">&#215;</a>
						</form>
									</div>
								</li>
								<li>
									<form id="deleteContact" action="#" method="post">
										<input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
										<input type="submit" class="delete-btn button tiny secondary alert" value="Delete" />
									</form>
								</li>
							</ul>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>