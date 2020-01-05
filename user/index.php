<!DOCTYPE html>
<html>
<head>
	<title>INSITES 2045</title>
</head>
<body>
<?php
session_start();
?>

<h4 align="right"><a href="editprofil.php">EDIT PROFIL</a>
<h4 align="right"><a href="../index.php?pesan=logout">LOGOUT</a>
<h3><marquee> Welcome <?php echo $_SESSION['username'];?> </marquee></h3>


</body>
</html>
