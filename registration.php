<?php
	require_once('config.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="register-style.css"/>
</head>
<body class="form">

<div>
	<?php
			if(isset($_POST['create'])){
				$firstname = $_POST['firstname'];
				$email = $_POST['email'];
				$password = $_POST['password'];

				$sql = "INSERT INTO users (firstname, email, password) VALUES(?,?,?)";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$firstname, $email, $password]);
				if($result){
					header("Location: http://localhost/Project1/index.html");
				}else{
					echo 'There was error. ';
				}
			}
	?>
</div>





	<div class="page-content">
		<div class="form">
			<form class="form-detail" action="registration.php" method="POST">
				<h2>Registration Form</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="firstname" id="full-name" class="input-text" placeholder="Your Name" required>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					</div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="create" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
