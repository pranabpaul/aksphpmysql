<?php
/* Attempt MySQL server connection. */
include 'conn.inc';
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

		$firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
		$lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

		if (empty($firstname)){
			die("Please enter your name");
		}
		if (empty($firstname)){
			die("Please enter last name");
		}
		if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
			die("Please enter valid email address");
		}
	 	$sql = "INSERT INTO registration_tbl (first_name, last_name, email) VALUES ('$firstname', '$lastname', '$email')";

		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully. ". "Go to <a href='index.php'>Home Page</a>.";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();	
		
    	}

    else{
		$conn->close();
		echo "Please go to index page";
	}
	
}
?>