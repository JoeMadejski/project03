<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $quote, $info, $link, $error) {
?>



<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Class Info</title>
	<link rel="stylesheet" href="css/renderform.css">
</head>
<body>
<?php
	// if there are any errors, display them
	if ($error != '') {
		echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
	}
?>





<form action="" method="post">

	<fieldset>
		<legend>Tell us a little about yourself...</legend>
		<h1>We'll make you a magnificent profile ~ </h1>
		<h2>Give us a little background information so that we can get started.</h2>
		<h3>Please write in your first and last name.</h3>
		<br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label for="firstname"><strong>First Name or Nickname: *</strong></label> <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>"/><br>
		<label for="lastname"><strong>Last Name: *</strong></label> <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>"/><br>
		<br>
		<h3>Upload a quote here! Select your favorite quote or short poem.</h3>
		<h4>20 words or under is ideal - this is the perfect place for a haiku, not so much a full-length poem.</h4>
		<label for="quote"><strong>quote: *</strong></label><textarea name="quote" id="quote" value="<?php echo $quote; ?>"></textarea><br><br>
		<h3>Write a couple sentences about yourself.</h3>
		<h4>(For the sake of brevity, pretty please keep it to 80 words or under.)</h4>
		<label for="info"><strong>Blurb About You: *</strong></label> <textarea name="info" id="info" value="<?php echo $info; ?>"></textarea><br><br>
		<h3>Throw us a link to your personal website page.</h3>
		<label for="link"><strong>Link to Personal Page: *</strong></label> <input type="text" name="link" id="link" value="<?php echo $link; ?>"/><br>
		<div>* required</div>
		<br><br>
		<input type="submit" name="submit" id="submit" value="Submit">
	</fieldset>
		<br><br>

</form>

<div>
	<br>
	<a href="db.php">Cancel</a>
</div>

</body>
</html>
<?php
}
?>