<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewPlayerBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$nickName = trim($_POST['nickname']);
	$teamName = trim($_POST['teamName']);
	$position = trim($_POST['position']);
	$bestHero = trim($_POST['bestHero']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($nickName) && !empty($teamName)  && !empty($position)  && !empty($bestHero)) {
			$query = insertIntoRegForm($pdo, $firstName, $lastName, $gender, $nickName, $teamName, $position, $bestHero);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editPlayerBtn'])) {
	$player_id = $_GET['player_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$nickName = trim($_POST['nickname']);
	$teamName = trim($_POST['teamName']);
	$position = trim($_POST['position']);
	$bestHero = trim($_POST['bestHero']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($nickName) && !empty($teamName)  && !empty($position)  && !empty($bestHero)) {

		$query = updateAPlayer($pdo, $player_id, $firstName, $lastName, $gender, $nickName, $teamName, $position, $bestHero);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deletePlayerBtn'])) {

	$query = deleteAPlayer($pdo, $_GET['player_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>