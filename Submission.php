<!DOCTYPE html>
<html>
	<head>
		<title>Form Submission Script</title>
	</head>
	<body>
		<?php
			if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
				$name = $_POST["name"];
				$email = $_POST["email"];
				require_once "Person.php";
				$person = new Person();
				$person->setName($name);
				$person->setEmail($email);
				echo "Name: {$person->getName()} \n";
				echo "Email: {$person->getEmail()} \n";
			}
		?>
	</body>
</html>