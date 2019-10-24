<?
function GetList($conn,$defenition,$status)
	{
	$sql = "SELECT * FROM user_info WHERE defenition LIKE '%" .$defenition. "%' AND status LIKE '%" .$status. "%'";
	$st = $conn->prepare($sql); // сохраняем полученный дискриптор из SELECT в st
	$st->execute(); // вызываем метод для выполнения запроса
	$o=array();
	while ($row = $st->fetch(PDO::FETCH_ASSOC))
	{
		$o[]=$row;
	}
	$conn = null;
	return ($o);
	}
?>