<?php 
$email = $_POST['email'];
$pwd = $_POST['pwd'];

if($email=="yaren.cerrah@ogr.sakarya.edu.tr" and $pwd=="b211210013") 
 {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $email;
    $_SESSION["pass"] = $pwd;
    header("Location:user.php");
}
else 
{
    echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
}

ob_end_flush();
?>