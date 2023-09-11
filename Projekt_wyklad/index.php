<!DOCTYPE html>
<html>
<head>
	<title>Logowanie</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Logowanie</h1>
		<form action="index.php" method="post">
			<div class="form-group">
				<label for="username">Nazwa użytkownika:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="form-group">
				<label for="password">Hasło:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<input type="submit" value="Zaloguj">

            <div class="error">
                <?php
                    if(isset($_POST['username'])) {
                        error_reporting(0);
                        $conn = mysqli_connect("localhost", "root", "", "baza");

                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $sql = "SELECT * FROM konta WHERE username='$username' AND password='$password'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            header("Location: index1.php");
                            exit();
                        } else {
                            echo "Niepoprawna nazwa użytkownika lub hasło";
                        }
                        mysqli_close($conn);
                    }
                ?>
            </div>
		</form>
	</div>
</body>
</html>
