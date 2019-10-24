<?php
require_once('dbdata.php');
try {
    $curPage = $_POST['page'];
    $rowsPerPage = $_POST['rows'];
    $dbh = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPass);
    $dbh->exec('SET CHARACTER SET utf8');
    $rows = $dbh->query('SELECT COUNT(id) AS count FROM user_info');
    $totalRows = $rows->fetch(PDO::FETCH_ASSOC);
    $firstRowIndex = $curPage * $rowsPerPage - $rowsPerPage;
    $res = $dbh->query('SELECT * FROM user_info');
    $i=0;
        $response->rows[0]['id']=$row['id'];
		$row['defenition']="Введите фио";
        $response->rows[0]['cell']=array($row['defenition']);
    echo json_encode($response);
}
catch (PDOException $e) {
    echo 'Database error: '.$e->getMessage();
}