<?php

// Check for empty input signup
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$result;
	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check invalid username
function invalidUid($username) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check invalid email
function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check if passwords matches
function pwdMatch($pwd, $pwdrepeat) {
	$result;
	if ($pwd !== $pwdrepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check if username is in database, if so then return data
function uidExists($conn, $username) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $username);
	mysqli_stmt_execute($stmt);

	// "Get result" returns the results from a prepared statement
	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

//Insert data into profile table
function addProfile($conn, $imagePath){
	$sql = "INSERT INTO profile (imagePath) VALUES(?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "s", $imagePath);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	mysqli_close($conn);
	header("location: ../signup.php?error=none");
	exit();
}

//Insert data to the mysports table
function addSports($conn, $baseball, $hockey, $lacrosse, $ski, $snowboard, $soccer){
	$sql = "INSERT INTO mysports (baseball, hockey, lacrosse, ski, snowboard, soccer) VALUES(?, ?, ?, ?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "iiiiii", $baseball, $hockey, $lacrosse, $ski, $snowboard, $soccer);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	mysqli_close($conn);
	header("location: ../signup.php?error=none");
	exit();
}

// Insert new user into database
function createUser($conn, $name, $email, $username, $pwd) {
	//Insert into the users table
	$sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	//Insert into the profile table
	//addProfile($conn2, "image path2");
	
	
	//$stmt2 = mysqli_stmt_init($conn);
	//$sql2 = "INSERT INTO `profile` (`imagePath`) VALUES (\'image path2\')";
	//mysqli_query($conn, $sql2);
	
	
	//Insert into the sports table
	//addSports($conn3, '1', '1', '1', '1', '1', '1');
	
	
	//$stmt3 = mysqli_stmt_init($conn);
	//$sql3 = "INSERT INTO `mysports` (`baseball`, `hockey`, `lacrosse`, `ski`, `snowboard`, `soccer`) VALUES (\'1\', \'1\', \'1\', \'1\', \'1\', \'1\')";
	//mysqli_query($conn, $sql3);
	
	
	//Close the current connection
	mysqli_close($conn);
	header("location: ../signup.php?error=none");
	exit();
}

// Check for empty input login
function emptyInputLogin($username, $pwd) {
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Log user into website
function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username);

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	elseif ($checkPwd === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		header("location: ../index.php?error=none");
		exit();
	}
}
