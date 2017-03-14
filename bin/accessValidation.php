<?php
/**
 * Created by IntelliJ IDEA.
 * User: serrin
 * Date: 3/9/17
 * Time: 2:53 PM
 * Purpose: Access Validator -- Generates and checks whether submitted request originated from local pages or active client
 */
$clientSession = $_COOKIE['PHPSESSID'];
$serverSession = $_SESSION['SESSID'];

//If the session ID's on the server and client are equal to each other do nothing. Otherwise, redirect client to the
// main logon form this will prevent clients from posting to the site's form IFF default document restrictions were set
//to browse which my site disables this feature
if ($clientSession == $serverSession) {
}
else {
    echo "You must log in";
    header("location:../index.php");
}
?>