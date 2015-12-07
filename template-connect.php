<?php

	/*
	 * Template name: Connect
	 */

	get_header();

?>

<div class="two-col form">
	<h2 class="subheader">Request Information</h2>
	<!-- add contact form markup here and I'll turn it into a plugin later -->
	<form action="">
		<ul>
			<li>
				<label for="name">Name
					<input type="text" name="name">
				</label>
			</li>
			<li>
				<label for="email">Email
					<input type="text" name="email">
				</label>
			</li>
			<li>
				<label for="phone">Phone Number
					<input type="text" name="phone">
				</label>
			</li>
			<li>
				<label for="address">Address
					<input type="text" name="address">
				</label>
			</li>
			<li>
				<label for="unit">Unit Type
					<select name="unit" id="">
						<option value="Select unit type">Select unit type</option>
						<option value="Big unit">Big unit</option>
						<option value="Small unit">Small unit</option>
					</select>
				</label>
			</li>
			<li>
				<label for="price">Min-Max Price
					<select name="price" id="">
						<option value="Select Price Range">Select Price Range</option>
						<option value="Cheap">Cheap</option>
						<option value="Expensive">Expensive</option>
					</select>
				</label>
			</li>
			<li>
				<fieldset>
					<legend>Are you working with an agent</legend>
					<label for="yes"><input type="radio" name="agent" value="yes">Yes</label>
					<label for="no"><input type="radio" name="agent" value="no">No</label>
				</fieldset>
			</li>
			<li>
				<label for="index">Primary or Secondary Home?
					<select name="unit" id="">
						<option value="Select option">Select option</option>
						<option value="Primary">Primary</option>
						<option value="Secondary">Secondary</option>
					</select>
				</label>
			</li>
			<li>
				<label for="payment">Are you paying cash or financing?
					<select name="payment" id="">
						<option value="Select option">Select option</option>
						<option value="Cash">Cash</option>
						<option value="Financing">Financing</option>
					</select>
				</label>
			</li>
			<li>
				<label for="source">How did you hear about us?
					<select name="source" id="">
						<option value="Select option">Select option</option>
						<option value="Friends or family">Friends or family</option>
						<option value="Advertizement">Advertizement</option>
					</select>
				</label>
			</li>
			<li>
				<label for="message">Questions or Comments?
					<textarea name="message" id="" cols="30" rows="1"></textarea>
				</label>
			</li>
		</ul>
		<button>Submit</button>
	</form>
</div>
<div class="two-col info">
	<h2 class="subheader">Get In Touch</h2>
	<h3 class="contact-info-header">Phone (9am-5pm)</h3>
	<p><?php echo get_field('phone_number'); ?></p>
	<h3 class="contact-info-header">Email</h3>
	<p><?php echo get_field('email_address'); ?></p>
	<h3 class="contact-info-header">Social</h3>
	<ul class="social-links">
		<li class="social">
			<!-- waiting on these links -->
			<a href="https://www.facebook.com/SeventyRainey/">Facebook</a>
		</li>
		<li class="social">
			<!-- waiting on these links -->
			<a href="https://twitter.com/70_rainey">Twitter</a>
		</li>
		<li class="social">
			<!-- waiting on these links -->
			<a href="https://www.instagram.com/70_rainey">Instagram</a>
		</li>
	</ul>
	<!-- waiting on map asset and/or more info -->
</div>


<?php get_footer(); ?>