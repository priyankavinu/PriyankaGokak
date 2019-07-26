<html>
<head>
<meta name="viewport" content="width=device-width,initialscale=1">
<style>
*{box-sizing:border-box;
}
.column{
float:left;
width:33.33%;
padding:10px;
height:1000px;
}
.row:after{content:"";
			display:table;
			clear:both;
			}
</style>
</head>
<body>
<div class="row">
<div class="column"
style="background-color:pink;" style="border-left-style:dotted;">
<h2>HELLO WORLD!</h2></br>
<h2>USER INFORMATION</h2>
</div>
<div class="column"
style="background-color:#FFCC33;" style="border-left-style:dotted;">
<form method="post" action="userdetail.php">
<table>
<caption><h5>USER DETAILS and THESE DETAILS ARE STORED IN DATABASE </h5></caption>
<tr>
<th>First name:</th>
<td><input type="text" name="fname"></td>
</tr>
<tr>
<th>Last name:</th>
<td><input type="text" name="lname"></td>
</tr>
<tr>
<tr>
<tr>
<th>City:</th>
<td><input type="text" name="city"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Submit">
</td>
</tr>

</table>
</form>
<table border="4" width="40%" bgcolor="#FFCCCC">
<tr bgcolor="#999999">
<td>Firstname</td>
<td>Lastname</td>
<td>City</td></td>

</tr>
<?php
mysql_connect('localhost','root','');
mysql_select_db('techbuds');
$fname;
$lname;
$city;
$sql1=mysql_query("select * from user");
while($row=mysql_fetch_array($sql1))
{
?>
<tr>
<td><?php echo $row['fname'];?>
<td><?php echo $row['lname'];?>
<td><?php echo $row['city'];?>
</tr>
<?php
}
?>

</table>
</div>
<div class="column"
style="background-color:red;" style="border-left-style:dotted;" style="border-right-style:dotted;">
<h2><marquee direction="right">THANK you!</marquee></p></h2></p>
</div>
</div></body>