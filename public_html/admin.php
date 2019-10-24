<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>�������� �������</title>
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
 <li><a href="index.php" title="User">��� �������������</a></li>
 <li><a href="admin.php" title="Admin" class="active">�������</a></li>
 </ul>
</div> 
</div> 
<div id="sidebar">
 <p align="justify">��� ���� ����� <font color="red">�������� ���������� � ������������</font> �������� �� ������� ���� ��� ����. � ���� ������� ����� ���������� � ������� "Enter". ��� ����, ����� ��� ��� �������� ���������� �������� ��������</p>
 <br><hr><br>
 <p>��� ���� ����� <font color="red">�������� ������ ������������</font> �������� �� ������ "������� ���" ��� ���� � ������� "Enter". �������� ��������: ����������� ������������ �������� � ������ �������������.</p>
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
            colNames:['�����', '���', '������'],
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
            colNames:[ '����������'],
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