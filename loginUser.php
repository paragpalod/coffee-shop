<?php
  session_start();

  //Open a new connection to the MySQL server
  $mysqli = new mysqli('localhost', 'root', 'Technative#9404', 'coffeeshop');

  //Output any connection error
  if ($mysqli->connect_error) {
      die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

  // VALIDATION
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      echo 'false';
  } else {
  	$result = mysqli_query($mysqli, "SELECT * FROM members WHERE email='$email'") or die(mysqli_error());
  	$num_row = mysqli_num_rows($result);
  	$row = mysqli_fetch_array($result);

  		if ($num_row < 1) {
  			echo 'false';
  		} else {
  			if (password_verify($password , $row['password'])) {
  				$_SESSION['login'] = $row['id'];
  				$_SESSION['fName'] = $row['fName'];
  				$_SESSION['lName'] = $row['lName'];
  				echo 'true';
  			} else {
          echo 'false';
        }
  		}

  }

?>
