<?php
session_start(); 
if( ! isset($_SESSION['username'])){ 
  header("location: index.php"); 
}
?>
<html>
<head>
  <title>Halaman Setelah Login</title>
</head>
<body>
  <h1>Welcome <?php echo $_SESSION['nama']; ?></h1>
  <h4>Anda berhasil login</h4>
  
  <a href="logout.php">Logout</a>
</body>
</html>