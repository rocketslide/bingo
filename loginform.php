<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Enter your information.</title>
<link rel="stylesheet" type="text/css" media="screen, print" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
<link rel="stylesheet" href="bingo.css" />
</head>

<body>
 
<?php include("navigation.php"); ?>
 
  
  <section class="jpage">
    
	<form class="newaccount">
		
		<ul>
			<li><label for="firstname">First Name:</label></li>
				<li><input type="text" name="firstname" id="firstname" /></li>
			<li><label for="lastname">Last Name:</label></li>
				<li><input type="text" name="lastname" id="lastname" /></li>
			<li><label for="email">Email:</label></li>
				<li><input type="email" name="email" id="email" /></li>
			<li><label for="password">Password:</label></li>
				<li><input type="password" name="password" id="password" /></li>
			<li><label for="passconfirm">Confirm Password:</label></li>
				<li><input type="password" name="password" id="passconfirm" /></li>
			<li><a href="bingocard.php"><input type="submit" value="Sign Up!" /></a></li>
		</ul>
	</form>   
    
  </section>
    
</body>

</html>
