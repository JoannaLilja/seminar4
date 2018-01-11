<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>The Tasty Recipes Website</title>
  <link rel="stylesheet" type="text/css" href="../../resources/css/stylesheet.css"/>
</head>
<body>
	<br>
  <H1>The Delicious Recipes Website</H1>
  <br>
  <div class="topnav">
    <a href="FirstPage">Index</a>
    <a href="CalendarPage">Calendar</a>
    <a href="MeatballPage">Meatballs Recipe</a>
    <a href="PancakePage">Pancakes Recipe</a>
    <a href="LoginPage" style = "color: red">Log In</a>
  </div>
  <br>

	<br>
	<br>
	<br>
	<br>

	<?php
	if(!isset($_SESSION["user"]))
	{
		echo '<form action="LoginAction">
						<div class="imgcontainer">
							* All fields required
						</div>
						<br>
						<div class="container">
							<label><b>Username</b></label>
							<input class="in" type="text" placeholder="Enter Username" name="username" required>
						</div>
						<br>
						<div class="container">
							<label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="password" required>
						</div>
						<br>
						<div class="container">
							<button type="submit">Login</button>
							<button type="button" class="cancelbtn">Cancel</button>
						</div>
					</form>
          <br>';

	}
	else
	{
		echo 'Welcome ' . $_SESSION["user"]["username"];
	}
	?>

</body>
</html>
