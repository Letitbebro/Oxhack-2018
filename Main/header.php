<?php

session_start();

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Enable responsive viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Homepage</title>
        <script src="https://unpkg.com/vue"></script>
    </head>
    <h1>Learn Economics (The Basics)</h1>
    <header>




				<div class="nav-login">
					<?php
					     if (isset($_SESSION['u_id'])) {
					     	echo '<form action="includes/logout.inc.php" method="POST">
						<button type="submit" name="submit">Logout</button>
					</form>';

					     } else {

					     	echo '<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/e-mail">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
					</form>
					<a href="signup.php">Sign Up</a>';

					     }
					?>

				</div>
			</div>

	</header>
