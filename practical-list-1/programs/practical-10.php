<html>
<head>
   <title>Student Ragistration Form</title>
<style>
    
    tr{
        font-size: 2em;
    }
    
    
    </style>
    
    
    </head>
<body>
<table  style="background:yellowgreen;" align="center"  border="1">
	<form action="result10.php" method="POST" >
	<tr>
	  <th colspan="5" style="background-color:yellow;">STUDENT RAGISTRATION FORM</th>
	</tr>
	<tr>
	<td style="color:white" align="right">Enrollment No :</td>
	<td><input type="number" name="en"  min=166450307001 max=166450307081></td>
	</tr>
	
	<tr>
	<td  style="color:white" align="right">First Name :</td>
	<td><input type="text" name="fn"></td>
	</tr>
	
	<tr>
	<td  style="color:white" align="right">Middle Name :</td>
	<td><input type="text" name="mn"></td>
	</tr>
	<tr>
	<td  style="color:white" align="right">Last Name :</td>
	<td><input type="text" name="ln"  ></td>
	</tr>
	
	<tr>
	<td  style="color:white" align="right">Mobile No :</td>
	<td><input type="number" name="mnn" placeholder="+91" min=9000000000 max=9999999999 ></td>
	</tr>
	
	<tr>
	<td  style="color:white"  align="right">Date Of Birth :</td>
	<td><input type="date" name="db"></td>
	</tr>
	
	<tr>
	<td  style="color:white"  align="right">Favourite Color :</td>
	<td><input type="color" name="fc"></td>
	</tr>
	
	<tr>
	<td  style="color:white"  align="right">Favourite Dish :</td>
	<td>
	    <select name="fd"  align="right">
		<option>Select</option>	
	  	<option>Pizza</option>
		<option>Samosa</option>	
		<option>Cake</option>
		<option>Pau Bhaji</option>
		<option>Pav Vada</option>
	    </select>
	</td>
	</tr>	
	
	<tr>
	<td  style="color:white"  align="right">Last Semester % :</td>
	<td><input type="text" name="ls" placeholder="%"></td>
	</tr>


	<tr>
	<td  align="right" style="color:white">Email Id:</td>
	<td><input type="email" name="em"></td>
	</tr>
	
	<tr>
	<td  style="color:white"  align="right">Parent Contact No :</td>
	<td><input type="number" name="pcn"  min=9000000000 max=9999999999></td>
	</tr>
	
	<tr>
	<td  align="right" style="color:white">Hobby :</td>
	<td >
        <input type="text" name="hobby" placeholder="hobby.." />
	</td>
	</tr>
	
	<tr>
	<td colspan="5" align="center" style="color:blue; font-size:3em;"><input type="submit" Value="SUBMIT"></td>
	</tr>
</form>
</table>
</body>
</html>
