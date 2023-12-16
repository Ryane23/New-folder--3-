<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>

<HEAD>
    <TITLE>Welcome</TITLE>
    <link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
</HEAD>

<BODY>
    <div class="phppot-container">
        <div class="page-header">
            <span class="login-signup"><a href="logout.php">Logout</a></span>
        </div>
        <div class="page-content">Welcome <?php echo $username; ?></div>
        <div class="button">
            <button><a href="fulljoin.php"></a>fulljoin</button>
            <button><a href="innerjoin.php"></a>innerjoin</button>
            <button><a href="righouterjoin.php"></a>rightouterjoin</button>
            <button><a href="crossjoin.php"></a>crossjoin</button>
            <button><a href="leftouterjoin.php"></a>leftouterjoin</button>
        </div>

    </div>
</BODY>

</HTML>