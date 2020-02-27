<?php
session_start();
unset($_SESSION['nik']);
session_unset();
session_destroy();
echo "<script language='javascript'> alert ('Trimakasih Silahkan Login Kembali'); window.location = 'index.php?pesan=logout'</script>";
?>