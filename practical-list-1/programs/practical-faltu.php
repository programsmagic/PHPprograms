<html>
<head>
<title>This program for practical 7 || In this program to make a simple calculater in Php</title>    
</head>
<body>
 <table boder="0" align="center">
      <tr>
           <th><h1 style="font.-size:2em;" align="center">Calculator In php</h1></th>
      </tr>
      <tr>
       <th><input type="text" name="values" placeholder="Enter your Expration..." requier="requier"  style="font-size:2em;"/> </th>
      </tr>
   <div>   
<table>

     <tr>
      <td><button type="submit" name="add"  <?php $opration = "+"; ?> style="font-size:2em;" >+</button></td>
      <td><button type="submit" name="add"  <?php $opration = "-"; ?> style="font-size:2em;" >-</button></td>
      <td><button type="submit" name="add"  <?php $opration = "*"; ?> style="font-size:2em;" >*</button></td>    
      <td><button type="submit" name="add"  <?php $opration = "/"; ?> style="font-size:2em;" >/</button></td>
      <td><button type="submit" name="add"  <?php $opration = "%"; ?> style="font-size:2em;" >%</button></td>
      </tr>  
   
      <tr>
      <td><button type="submit" name="add"  <?php $opration = "1"; ?> style="font-size:2em;" >1</button></td>
      <td><button type="submit" name="add"  <?php $opration = "2"; ?> style="font-size:2em;" >2</button></td>
      <td><button type="submit" name="add"  <?php $opration = "3"; ?> style="font-size:2em;" >3</button></td>    
      <td><button type="submit" name="add"  <?php $opration = "4"; ?> style="font-size:2em;" >4</button></td>
      <td><button type="submit" name="add"  <?php $opration = "5"; ?> style="font-size:2em;" >5</button></td>
      </tr> 
 
       
     <tr>
      <td><button type="submit" name="add"  <?php $opration = "5"; ?> style="font-size:2em;" >6</button></td>
      <td><button type="submit" name="add"  <?php $opration = "7"; ?> style="font-size:2em;" >7</button></td>
      <td><button type="submit" name="add"  <?php $opration = "8"; ?> style="font-size:2em;" >8</button></td>    
      <td><button type="submit" name="add"  <?php $opration = "9"; ?> style="font-size:2em;" >9</button></td>
      <td><button type="submit" name="add"  <?php $opration = "0"; ?> style="font-size:2em;" >0</button></td>
      </tr> 

<tr>
      <td><button type="submit" name="add"  <?php $opration = "."; ?> style="font-size:2em;" >.</button></td>
      <td><button type="submit" name="add"  <?php $opration = "="; ?> style="font-size:2em;" >=</button></td>
      <td><button type="submit" name="add"  <?php $opration = "?"; ?> style="font-size:2em;" >Ans</button></td>    
      <td><button type="submit" name="add"  <?php $opration = "<-"; ?> style="font-size:2em;" >Del</button></td>
      <td><button type="submit" name="add"  <?php $opration = "Cl"; ?> style="font-size:2em;" >Close</button></td>
      </tr>
</table> 
   </div>

</body>    
</html>


<?php
echo $opration;
if(isset($_GET['add']))
{

echo $_GET['add'];


echo $opration;
}

?>