<?php
try {
if ($username == null) {
    noLogin();
    echo "no login available";
}
    else {
        //sql logon method
        //cookie for logged in user
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        //set roles
        if ($username == 'root') {
            $_SESSION['role'] = 'DBAdmin';
        }
        if ($username == 'nw_CEO') {
            $_SESSION['role'] = 'ceo';
        }
        if ($username == 'nw_hr') {
            $_SESSION['role'] = 'hr';
        }
        if ($username == 'nw_Sales') {
            $_SESSION['role'] = 'sales';
        }
        doLogin($username, $password);

        //sql statements to be completed.
    }


}
catch(PDOException $e) {
    //Return an error message stating improper logon
    $error = "<div style=\"background-color: mistyrose;color: red;width: 700px; \">Something has gone wrong with your connection to the Database Please check your username and password.</div>";
    //unset the username variable so the UI/UX returns to its default state.
    unset($username);
}

function noLogin() {
    $handler = new PDO('mysql:dbname=Northwind;host=localhost','root','a7QWzJursnE7j2MY');
    return $handler;

}
function doLogin($username, $password) {
    $handler = new PDO('mysql:dbname=Northwind;host=localhost',$username,$password);
    return $handler;

}