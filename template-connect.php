<?php 

	/*
	 * Template name: Connect
	 */

	get_header();

?>

<div class="two-col">
	<h2 class="subheader">Request Information</h2>
	<!-- add contact form markup here and I'll turn it into a plugin later -->
</div>
<div class="two-col">
	<h2 class="subheader">Get In Touch</h2>
	<h3 class="contact-info-header">Phone (9am-5pm)</h3>
	<p><?php echo get_field('phone_number'); ?></p>
	<h3 class="contact-info-header">Email</h3>
	<p><?php echo get_field('email_address'); ?></p>
	<h3 class="contact-info-header">Social</h3>
	<ul class="social-links">
		<li class="social">
			<!-- waiting on these links -->
			<a href="">Facebook</a>
		</li>
		<li class="social">
			<!-- waiting on these links -->
			<a href="">Twitter</a>
		</li>
		<li class="social">
			<!-- waiting on these links -->
			<a href="">Instagram</a>
		</li>
	</ul>
	<!-- waiting on map asset and/or more info -->
</div>


<?php get_footer(); ?>