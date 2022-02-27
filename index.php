<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My Form</title>
		<link rel="stylesheet" href="styleform.css">
	</head>
	<body>
		<main>
			<p>SEND E-MAIL</p>
			<form class="contact.form" action="contactform.php" medthod="post">
				<input type="text" name="name" placeholder="Your full name">
				<input type="text" name="email" placeholder="Your email address">
				<input type="text" name="subject" placeholder="Subject">
				<textarea name="message" placeholder="Message"></textarea>
				<button type="submit" name="submit" id="submitme">SEND MAIL</button>
			</form>
		</main>
	</body>
</html>