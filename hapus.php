<?php

include 'konek.php';
$id = $_GET['id'];

$sql_delete="DELETE FROM user WHERE id=$id";

mysqli_query($link,$sql_delete)or die(mysqli_error($link));
echo '<script>
alert("Data Berhasil Dihapus");
location="index.php?"
</script>';
?>
