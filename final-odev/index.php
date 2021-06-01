<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Darkness</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>

<body id="top">
    <div class="wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="index.html">Darkness</a></h1>
                <p>Free Website Template</p>
            </div>
            <div id="topnav">
                <form method="post">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="userNAme" required>
                    <label for="psw"><b>Password</b></label>

                    <input id="PasswordButton" type="password" placeholder="Enter Password" name="psw" required>

                    <button class="cancelbtn" name="logBtn" type="submit">Giriş Yap</button>
                    <button class="cancelbtn" name="inBtn" type="submit">Kayıt Ol</button>

                    <div>
                        <!-- style="background-color:#f1f1f1" -->
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>

                </form>
            </div>
            <br class="clear" />
        </div>

    </div>


    <?php
include "connection.php";

ob_start();
session_start();
 // Using database connection file here
if(isset($_POST['inBtn']))
{		
    $KullaniciAdi = $_POST['userNAme'];
    $sifre = $_POST['psw'];

    $insert = mysqli_query($conn,"INSERT INTO `tbl_users`(`KullaniciAdi`, `sifre`) VALUES ('$KullaniciAdi','$sifre')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}  
if(isset($_POST['logBtn']))
{ 
$sql_check = mysqli_query($conn,"SELECT * FROM `tbl_users` WHERE `KullaniciAdi`='$KullaniciAdi' and `sifre`='$sifre'") or die(mysql_error());
 
if($sql_check)  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:motors.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
}
ob_end_flush();
?>
    <h3>Giriş Yapınız</h3>
</body>

</html>