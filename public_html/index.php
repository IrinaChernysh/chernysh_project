<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=cp1251" />
<title>�������� �������</title>
<link href="/assets/css/styles.css" rel="stylesheet" type="text/css">
<style>
input[type=text] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
    input[type=submit] {
    margin-top:20px;    
    padding:5px 30px; 
    background:#ccc; 
    border-radius: 5px; 
}
</style>
</head>
<body>
<form action = "#" method = "POST" enctype="multipart/form-data">
<div id="wrapper">
<div id="header">
<div id="menu">
<ul>
<li><a href="index.php" title="User" class="active">��� �������������</a></li>
<li><a href="admin.php" title="Admin" >�������</a></li>
</ul>
</div>
</div>
<div id="sidebar">
<input type=text placeholder="���" name=textField1 id="acInput2" value="">
<input type=text placeholder="������" name=textField2 id="acInput3" value="">
<input type="submit" name="go1" value="��������� ������" >
</div>
<div id="content">
<table>
<caption>������������</caption>
<tr>
<th>��� ������������</th>
<th>������ ������������</th>
</tr>
<?php
$conn = new PDO( "mysql:host=localhost; dbname=irinakr7_c; charset=cp1251", "irinakr7_c", "56SW*HwP" );
require "zapros.php";
if (isset($_POST['go1']))
	{
$info=GetList($conn,$_POST[textField1], $_POST[textField2]);
  	foreach ($info as $key)
		{
			echo "<tr><td>". $key['defenition']. "</td><td>". $key['status']. "</td></tr>";
         }
	}
?>
</table>
</p>
</div>
<div class="clear"></div>
<div id="footer">
<br>    
<p align="center">��� ����, ����� �������� ���� ������ ������������� ������� �� ������ "��������� ������"</p>
</div>
</div>
</form>
</body>
</html>