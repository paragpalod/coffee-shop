<?php
  session_start();

  //Open a new connection to the MySQL server
  $mysqli = new mysqli('localhost', 'root', 'Technative#9404', 'coffeeshop');

  //Output any connection error
  if ($mysqli->connect_error) {
      die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  }

  $fname = mysqli_real_escape_string($mysqli, $_POST['fName']);
  $lname = mysqli_real_escape_string($mysqli, $_POST['lName']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);

  //VALIDATION

  if (strlen($fname) < 2) {
      echo 'fName';
  } elseif (strlen($lname) < 2) {
      echo 'lName';
  } elseif (strlen($email) <= 4) {
      echo 'eShort';
  } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      echo 'eFormat';
  } elseif (strlen($password) <= 4) {
      echo 'pShort';

  //VALIDATION

  } else {

  	//PASSWORD ENCRYPT
  	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

  	$query = "SELECT * FROM members WHERE email='$email'";
  	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
  	$num_row = mysqli_num_rows($result);
  	$row = mysqli_fetch_array($result);

  		if ($num_row < 1) {
  			$insert_row = $mysqli->query("INSERT INTO members (fName, lName, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");
  			if ($insert_row) {

  				$_SESSION['login'] = $mysqli->insert_id;
  				$_SESSION['fname'] = $fname;
  				$_SESSION['lname'] = $lname;

  				echo 'true';

  			}

  		} else {

  			echo 'false';

  		}

  }

?>
