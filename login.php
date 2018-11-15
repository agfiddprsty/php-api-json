<!DOCTYPE html>
<html>
<head>
	<title>Agfid Danu Prasetyo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="input-form">
	<form action="action.php" method="post">
	<h1 class="judul">Register</h1>
        <form method="GET" action="index.php">
            <div class="form">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="form">
                <label>Password</label>
                <input type="password" name="password">
			</div>
			<div class="form">
                <label>Level</label>
                <input type="text" name="level">
            </div>
			<div class="form">
                <label>Fullname</label>
                <input type="text" name="fullname">
			</div>
			<div>
                <input type="submit" name="submit" value="SUBMIT" class="bg-blue">
            </div>
        </form>
    </section>
</body>
</html>

