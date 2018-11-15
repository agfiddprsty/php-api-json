<?php

include('konek.php');

function query($query) {
    global $link;
    $hasil = mysqli_query($link, $query);
    $box = [];
    while ($data = mysqli_fetch_assoc($hasil)) {
        $box[] = $data;
    }
    return $box;
}

$user = query("SELECT * FROM user");

?>

<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="styleidx.css">
	</head>
	<body>
	<nav>
        <ul>
            <li><a href="update.php">EDIT DATA</a></li>
            <li><a href="delete.php">HAPUS DATA</a></li>
            <li><a href="login.php">TAMBAH DATA</a></li>
        </ul>
    </nav> <br> <br>
		<table border="1px" cellpadding="10" cellspacing="0">
	 		<tr>
	 			<td bgcolor="#ff00fa" align="center">Id</td>
	 			<td bgcolor="#ff00fa" align="center">Username</td>
	 			<td bgcolor="#ff00fa" align="center">Level</td>
	 			<td bgcolor="#ff00fa" align="center">Fullname</td>
	 		</tr>
	 		<?php foreach($user as $user) : ?>
				 <tr>
				 	<td><?= $user["id"] ?></td>
				 	<td><?= $user["username"] ?></td>
				 	<td><?= $user["level"] ?></td>
				 	<td><?= $user["fullname"] ?></td>
				 </tr>
				<?php endforeach; ?>
	 	</table>
 	</body>
</html>
