<?php
$user="ayoubridouani";
$pass="fstfes2017";
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
);
try {
    $con = new pdo("mysql:host=localhost;dbname=miniProjet", $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
}
?>
