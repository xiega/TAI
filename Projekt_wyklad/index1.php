<!DOCTYPE html>
<html>
<head>
	<title>Lista uczniów</title>
	<meta charset="UTF-8">
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #4CAF50;
			color: white;
			padding: 20px;
			text-align: center;
		}
		table {
			border-collapse: collapse;
			margin: 20px auto;
			width: 80%;
		}
		th, td {
			padding: 12px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
		th {
			background-color: #333;
			color: white;
		}
		button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 20px 0;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<header>
		<h1>Lista uczniów</h1>
	</header>
	<table>
		<tr>
			<th>Imię</th>
			<th>Nazwisko</th>
			<th>Ocena</th>
			<th>Przedmiot</th>
		</tr>
		<?php
			error_reporting(0);
			$conn = new mysqli("localhost", "root", "", "baza");

			$sql = "SELECT * FROM uczniowie";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["imie"] . "</td><td>" . $row["nazwisko"] . "</td><td>" . $row["ocena"] . "</td><td>" . $row["przedmiot"] . "</td></tr>";
				}
			} else {
				echo "<tr><td colspan='4'>Brak rekordów.</td></tr>";
			}

			$conn->close();
		?>
	</table>
	<button onclick="window.location.href='index.php'">Powrót do strony głównej</button>
</body>
</html>
