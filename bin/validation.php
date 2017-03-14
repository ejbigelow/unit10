<?php

echo "<br />";
//This logic runs if a user is logged in

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];


    if (isset($_POST['tables'])) {
        $table = $_POST['tables'];
        echo $table;
        include 'inc/sql.inc';
    }

}
if (isset($_POST['submit'])) {
//rudimentary cleanup

    $username = trim(htmlentities($_POST['name']));
    $password = trim(htmlentities($_POST['password']));

    //check no nulls
    if ($username == null || $password == null) {
        //Script will immediately die if blank boxes.
        die("you must specify a username & password, <a href='..'>Back</a>");

    }
    include 'inc/sql.inc';
}
if (isset($_POST['logout'])){
    echo "logout";
}
