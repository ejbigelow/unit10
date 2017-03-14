<?php
session_start();
$username = null;
$password = null;
$_SESSION['SESSID'] = $_COOKIE['PHPSESSID'];
include 'bin/validation.php';
?>

<head>
    <title>Unit III Assignment</title>
</head>
<body>
<h1 id="header" style="text-align: center">Unit III</h1>
<div id="error" style="margin-left: auto; margin-right: auto"><?php if (isset($error)) { echo $error;} ?></div>
<div id="abstract" style="width:20%">
    <p>ABSTRACT: Unit II ntier project. Please note that the Northwind&copy; MySQL database
        is significantly different than the MSSQL database, Unit III's scripts were used in both cases.
    </p>
    <p>
        In this code PHP and MySQL are used to output some data. the structure of this data is as follows. The MySQL code lists
        9 employees in FirstName and LastName field whereas MSSQL has a total of 91
    </p>
    <pre>
        index.php
        |
        |-bin/verification.php -- rudimentary error handling
        |   |-inc/sql.inc -- sql database connector using PDO with a data base username and password verification.
        |-data/dataSets.inc -- the data required to complete the assignment, also using PDO.
    </pre>
</div>

<div id="lesson" style="align-content: center; width: 40%">
    <?php
    if (isset($_SESSION['username'])){

        include 'bin/queryBuilder.php';
        include 'inc/formGetData.php';


    }
    else {

        include 'inc/formLogin.php';

    }
    if (isset($_SESSION['username'])) {
            echo "<pre>";
            print_r($_SESSION);
            print_r($access);
            echo "</pre>";
    }
?>
</div>
<a href="..">Back</a> | <a href="bin/logout.php">Logout</a>
</body>

