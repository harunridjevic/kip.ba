<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "kipba_baza";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Konekcija neuspješna!";

}