<?php require_once 'main/dbConfig.php'; ?>
<?php require_once 'main/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Player</title>
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
	<h1>Are you sure you want to delete this player?</h1>
	<?php $getPlayerById = getPlayerByID($pdo, $_GET['player_id']); ?>
	<form action="main/handleForms.php?player_id=<?php echo $_GET['player_id']; ?>" method="POST">

		<div class="playerContainer" style="border-style: solid; font-family: 'Arial';">
			<p>First Name: <?php echo $getPlayerById['first_name']; ?></p>
			<p>Last Name: <?php echo $getPlayerById['last_name']; ?></p>
			<p>Gender: <?php echo $getPlayerById['gender']; ?></p>
			<p>Nickname: <?php echo $getPlayerById['nickname']; ?></p>
			<p>Team Name: <?php echo $getPlayerById['team_name']; ?></p>
			<p>Position: <?php echo $getPlayerById['position']; ?></p>
			<p>Best Hero: <?php echo $getPlayerById['best_hero']; ?></p>
			<input type="submit" name="deletePlayerBtn" value="Delete">
		</div>
	</form>
</body>
</html>
