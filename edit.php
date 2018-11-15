<?php

include 'konek.php';
$id = $_GET['id'];
$username = $_GET['username'];
$password = $_GET['password'];
$level = $_GET['level'];
$fullname = $_GET['fullname'];

$sql_update="UPDATE user SET username='$username', password='$password', level='$level', fullname='$fullname' WHERE id=$id";

mysqli_query($link,$sql_update)or die(mysqli_error($link));
echo '<script>
alert("Data Berhasil Disimpan");
location="index.php?"
</script>';
?>
