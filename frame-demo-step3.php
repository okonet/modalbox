<?php
	$name = $_GET['name'];
	$email = $_GET['email'];
?>

<div id="mb-send-link">
	<h1><?php echo $name ?>, your message sent!</h1>
	<p>Your message to <strong><?php echo $email ?></strong> has been successfully sent.</p>
	<p style="font-size: 85%; color: #CCC;">Note: the message has not been sent! This is just the demonstration of the process.</p>
	<p><input type="button" value="Close window" onclick="Modalbox.hide();" /></p>
</div>