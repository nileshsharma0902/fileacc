<center>
<html>
<?php
//include('header.php');?>
<br/><br/><br/>
<div class="panel panel-default">
            <div class="panel-body">
            </div>
            </div>
<form method='POST'>
<table border="1"width=60%>
<tr>
<th>name</th>
<th>email</th>
<th>password</th>
</tr>
</table>
</form>
</html>
</center>

<center>
<?php

$conn=mysql_connect('localhost','root','');
mysql_select_db('acc');
$con="select * from user";
$var=mysql_query($con);
echo "<table border='1' width='60%'>";
while($row=mysql_fetch_array($var))
{
	
	echo "<tr>";
	echo "<td>".$row[0]."</td><td>".$row[1]."</td>.<td>".$row[2]."</td><td>".$row[3]."</td>";
	echo "</tr>";
}
?>
</center>