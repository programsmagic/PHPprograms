<html>
<head>
    <title>Student Form</title>
    <style>
        td{
        text-align: right;
        }
    
    
    </style>
</head>
<body style="background-color:yellow;">
<?php
	
	$Enroll=$_POST["en"];
	$Fname=$_POST["fn"];
	$Mname=$_POST["mn"];
	$Lname=$_POST["ln"];
	$Mono=$_POST["mnn"];
	$DOB=$_POST["db"];
	$color=$_POST["fc"];
	$dish=$_POST["fd"];
	$lastsem=$_POST["ls"];
	$Email=$_POST["em"];
	$Parent=$_POST["pcn"];
	$hobby=$_POST["hobby"];
?>
<table border="0" align="center" style="background-color:yellowgreen"  cellpadding="10">
<tr>
<th colspan="2" style="background:lightblue;"><h1 align="center">Information</h1></th>
</tr>
<tr>
<td>Enroll No:</td>
	<?php
	echo "<td>$Enroll</td>";	
	?><br>
</tr>	

<tr>	
<td>Name:</td>
	<?php
	echo "<td>$Fname $Mname $Lname </td>";	
	?><br>
</tr>
<tr>
<td>Mobile No:</td>
	<?php
	echo "<td>$Mono</td>";	
	?><br>
</tr>
<tr>
<td>Date Of Birth:</td>
	<?php
	echo "<td>$DOB</td>";	
	?><br>
</tr>
<tr>
<td>Color:</td>
	<?php
	echo "<td>$color</td>";	
	?><br>
</tr>	
	
<tr>
<td>Favourite Dish:</td>
	<?php
	echo "<td>$dish</td>";	
	?><br>
</tr>	

<tr>
<td>Last Sem %:</td>
	<?php
	echo "<td>$lastsem</td>";	
	?><br>
</tr>	

<tr>
<td>Email Id:</td>
	<?php
	echo "<td>$Email</td>";	
	?><br>
</tr>

<tr>
<td>Parent Contact No:</td>
	<?php
	echo "<td>$Parent</td>";	
	?><br>
</tr>
<tr>	
<td>Hobby:</td>
	<?php
	echo "<td>$hobby</td>";	
	?><br>
</tr>	


</table>
</body>
</html>