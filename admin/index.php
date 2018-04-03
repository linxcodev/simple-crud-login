<?php include('akses.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin || Guest</title>
</head>
<body>
	<div style='text-align:center'>
	<h2>Admin</h2>
	<p><a href="index.php">Home</a> / <a href="../logout.php">Logout</a></p>
	<p>Selamat Datang Admin <?=$_SESSION['admin'] ?></p>
	</div>
</body>
</html>
