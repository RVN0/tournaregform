<?php require_once 'main/dbConfig.php'; ?>
<?php require_once 'main/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Player</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getplayerById = getPlayerByID($pdo, $_GET['player_id']); ?>
	<form action="main/handleForms.php?player_id=<?php echo $_GET['player_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getplayerById['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getplayerById['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getplayerById['gender']; ?>">
		</p>
		<p>
			<label for="nickname">Nickname</label>
			<input type="text" name="nickname" value="<?php echo $getplayerById['nickname']; ?>">
		</p>
		<p>
			<label for="teamName">Team Name</label>
			<input type="text" name="teamName" value="<?php echo $getplayerById['team_name']; ?>">
		</p>
		<p>
			<label for="position">Position</label>
			<input type="text" name="position" value="<?php echo $getplayerById['position']; ?>">
		</p>
		<p>
			<label for="bestHero">Best Hero</label>
			<input type="text" name="bestHero" value="<?php echo $getplayerById['best_hero']; ?>">
			<input type="submit" name="editPlayerBtn" value="Update Player">
		</p>
	</form>
</body>
</html>
