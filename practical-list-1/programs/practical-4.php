
<html>
<head>
<title>This is website</title>
</head>
<body>

<table border="0" align="center" cellpadding="10" cellspace="0">
<tr>
<th colspan="3" style="background:green; font-size:2em; color:white;"> Thsi table for all student information.</th>
</tr>

<tr style="background:lightblue;"> 
        <td>Sr.No: </td>
         <td>Enrolment No:</td>
        <td>Mobile No:</td>
 </tr>


<?php
$en = 166450307001;
$i=1;
$number = 9724601120;

for($i=1;$i<=120;$i++)
   {

     if($i%2==0){echo " <tr style='background:powderblue;'> 
        <td>".$i."</td>
         <td>".$en."</td>
        <td>+91".$number."</td>
         </tr>";
         }
    else
    {
        echo " <tr style='background:yellowgreen;'> 
        <td>".$i."</td>
         <td>".$en."</td>
        <td>+91".$number."</td>
         </tr>";
         }
$en++;
$number++;

//if($en > 1664507010)
}

?>

</table>





</body>
</html>