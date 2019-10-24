<?php
require_once('dbdata.php');
try {
    $id = $_POST['id'];
    $defenition = $_POST['defenition'];
    $status = $_POST['status'];
    $dbh = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPass);
    $dbh->exec('SET CHARACTER SET utf8');
$stm = $dbh->prepare('INSERT INTO user_info ( defenition, status) VALUES ("'.$defenition.'", "Первый")');
$stm->execute();
}
catch (PDOException $e) {
    echo 'Database error: '.$e->getMessage();
}