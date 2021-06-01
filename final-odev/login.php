<!DOCTYPE html>
<html lang="en">

<head>
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
                <ul>
                    <form method="post">
                        <div class="container">
                        </div>
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="userNAme" required>
                        <label for="psw"><b>Password</b></label>

                        <input id="PasswordButton" type="password" placeholder="Enter Password" name="psw" required>

                        <button id="?usernameButton=UserNameButton" name="unameButton" type="submit">Login</button>
                        <button type="submit">Register</button>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
            </div>
        </div>
        </form>
    </div>
    <br class="clear" />
    </div>
    </div>


    <?php
include "connection.php"; // Using database connection file here

if(isset($_POST['unameButton']))
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

mysqli_close($conn); // Close connection
?>
    <h3>Fill the Form</h3>
</body>

</html>