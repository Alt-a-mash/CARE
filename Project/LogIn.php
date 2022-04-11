<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CARE</title>
	<link rel="stylesheet" href="./StyleSheets/LoginStyleSheet.css">
</head>
<body>
	<div class="box1">
		<h2>Login</h2>
		<form action="./php/Login.php" method="POST">
			<div class="inputBox">
				<input type="text" name="txt1" required>
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input pattern=".{4,}" type="password" name="txt2" required>
				<label>Password</label>
			</div>
			<input type="submit" name="btn1" value="Submit" class="but">
		</form>
	</div>
</body>
</html>