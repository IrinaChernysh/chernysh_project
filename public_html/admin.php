<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Тестовое задание</title>
<link href="/assets/css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="screen" href="themes/basic/grid.css" />
<script type="text/javascript" src="//code.jquery.com/jquery-compat-git.js"></script>
<style>
   hr {
    border: none;
    background-color: red;
    color: red;
    height: 2px;
   }
</style>
</head>
<body> 
<div id="wrapper">
<div id="header">
 <div id="menu">
 <ul>
 <li><a href="index.php" title="User">Для пользователей</a></li>
 <li><a href="admin.php" title="Admin" class="active">Админка</a></li>
 </ul>
</div> 
</div> 
<div id="sidebar">
 <p align="justify">Для того чтобы <font color="red">изменить информацию о пользователе</font> кликните по нужному полю два раза. В поле введите новую информацию и нажмите "Enter". Для того, чтобы ещё раз изменить информацию обновите страницу</p>
 <br><hr><br>
 <p>Для того чтобы <font color="red">добавить нового пользователя</font> кликните по строке "Введите ФИО" два раза и нажмите "Enter". ОБновите страницу: добавленный пользователь появится в списке пользователей.</p>
 </div>
 <div id="content"> 
<table id="list" class="scrol">
</table>
<script type="text/javascript" src="jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="jquery.jqGrid.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
        var lastSel;
        jQuery("#list").jqGrid({
            url:'getdata.php',
            datatype: 'json',
            mtype: 'POST',
            colNames:['Номер', 'ФИО', 'Статус'],
            colModel :[
                {name:'id', index:'id', width:50}
                ,{name:'defenition', index:'defenition', width:280, align:'left', editable:true, edittype:"text"}
                ,{name:'status', index:'status', width:90, editable:true, edittype:"text"}
                ],
            viewrecords: true,
            ondblClickRow: function(id) {
                if (id && id != lastSel) {
                    jQuery("#list").restoreRow(lastSel);
                    jQuery("#list").editRow(id, true);
                    lastSel = id;
                }
            },
            editurl: 'saverow.php'
        }); 
    }); 
</script>
<br><br>
	<table id="list_2" class="scroll"></table>
	<script type="text/javascript">
    jQuery(document).ready(function(){
        var lastSel;
        jQuery("#list_2").jqGrid({
            url:'getdata_2.php',
            datatype: 'json',
            mtype: 'POST',
            colNames:[ 'Добавление'],
            colModel :[
               {name:'defenition', index:'defenition', width:540, align:'left', editable:true, edittype:"text"}
                ],
            viewrecords: true,
            ondblClickRow: function(id) {
                if (id && id != lastSel) {
                    jQuery("#list_2").restoreRow(lastSel);
                    jQuery("#list_2").editRow(id, true);
                    lastSel = id;
                }
            },
            editurl: 'saverow_2.php'
        }); 
    }); 
</script>
</div>
<div class="clear"></div>
<div id="footer">
</div>
</div> 
</body>
</html> 