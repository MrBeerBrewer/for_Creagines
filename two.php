<?php
	
include 'one.php';

/*Data to insert: This is what you get from Unity. Access HTTP POST data and store them on to variables. */
$username = $_POST['UnityUN'];
$password = $_POST['UnityEMAIL'];
$email = $_POST['UnityPASS'];

/*Prep*/
$sql = 'CALL AddUser(?, ?, ?)';
$stmt = $pdo->prepare($sql);

/*Bind*/
/*Check bindParam constants: http://php.net/manual/en/pdo.constants.php*/
$stmt->bindParam(1, $username, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 50);
$stmt->bindParam(2, $password, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 250);
$stmt->bindParam(3, $email, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 250);

/*print "Values of bound parameters _before_ CALL:\n";
print "  1: {$username} 2: {$password} 3:{$email}\n";*/

/*Exec*/
$stmt->execute();

/*print "Values of bound parameters _after_ CALL:\n";
print "  1: {$username} 2: {$password} 3:{$email}\n";*/