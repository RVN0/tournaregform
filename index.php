<?php require_once 'main/dbConfig.php'; ?>
<?php require_once 'main/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<h3>Player Registration Form</h3>
	<form action="main/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="nickname">Nickname</label> <input type="text" name="nickname"></p>
		<p><label for="teamName">Team Name</label> <input type="text" name="teamName"></p>
		<p><label for="position">Position</label> <input type="text" name="position"></p>
		<p><label for="bestHero">Best Hero</label> <input type="text" name="bestHero">
			<input type="submit" name="insertNewPlayerBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Player ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Nickname</th>
	    <th>Team Name</th>
	    <th>Position</th>
	    <th>Best Hero</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllPlayer = seeAllPlayerRecords($pdo); ?>
	  <?php foreach ($seeAllPlayer as $row) { ?>
	  <tr>
	  	<td><?php echo $row['player_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['nickname']; ?></td>
	  	<td><?php echo $row['team_name']; ?></td>
	  	<td><?php echo $row['position']; ?></td>
	  	<td><?php echo $row['best_hero']; ?></td>
	  	<td>
	  		<a href="editplayer.php?player_id=<?php echo $row['player_id'];?>">Edit</a>
	  		<a href="deleteplayer.php?player_id=<?php echo $row['player_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>