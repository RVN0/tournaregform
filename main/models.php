<?php 

require_once 'dbConfig.php';

function insertIntoRegForm($pdo,$first_name, $last_name, $gender, $nickname, $team_name, $position, $best_hero) {

	$sql = "INSERT INTO player_forms (first_name,last_name,gender,nickname, team_name, position, best_hero) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $nickname, $team_name, $position, $best_hero]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllPlayerRecords($pdo) {
	$sql = "SELECT * FROM player_forms";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getPlayerByID($pdo, $player_id) {
	$sql = "SELECT * FROM player_forms WHERE player_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$player_id])) {
		return $stmt->fetch();
	}
}

function updateAPlayer($pdo, $player_id, $first_name, $last_name, $gender, $nickname, $team_name, $position, $best_hero) {

	$sql = "UPDATE player_forms 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?, 
					nickname = ?, 
					team_name = ?, 
					position = ?, 
					best_hero = ? 
			WHERE player_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $nickname, $team_name, $position, $best_hero, $player_id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteAPlayer($pdo, $player_id) {

	$sql = "DELETE FROM player_forms WHERE player_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$player_id]);

	if ($executeQuery) {
		return true;
	}

}




?>