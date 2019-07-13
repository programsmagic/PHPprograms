<html>
<head>
<title>This program for practical 7 || In this program to make a simple calculater in Php</title>    
</head>
<body>
 <table boder="0" align="center">
      <tr>
           <th><h1 style="font.-size:2em;" align="center">Calculator In php</h1></th>
      </tr>
    <form action="" method="get">
        <tr>
       <th><input type="text" name="value1" placeholder="Enter value 1.." requier="requier"  style="font-size:2em;"/> </th>
      </tr>
     <tr>
       <th><input type="text" name="value2" placeholder="Enter value 2.." requier="requier"  style="font-size:2em;"/> </th>
      </tr>
    <tr>
     <td>
        <select name="op">
         <option>Choose Opration</option>
         <option value="1">+</option>
         <option value="2">-</option>
         <option value="3">*</option>
         <option value="4">/</option>
         <option value="5">%</option>
         </select>
        </td>
     </tr>
        
        <tr>
    <td><input type="submit" name="submit" value="Find Ans"/></td>
        </tr>
        </form>

    </table>
    
    <?php
    
    
    if(isset($_GET['submit']))
    {
        
        //echo "we are programmers";
    $a = $_GET['value1'];
    $b = $_GET['value2'];
    $o = $_GET['op'];
    $a = $_GET['value1'];
    
    
    if($o==1)
    { 
        $ans = $a + $b;
        echo "<hr>Addition result =".$ans;
    }
    else if($o==2)
    {
        $ans = $a - $b;
        echo "<hr>Substraction - result =".$ans;
    } 
    else if($o==3)
        {
           $ans = $a * $b;
        echo "<hr>Multiphication * result =".$ans;
        }  
    else if($o==4)
        {
          $ans = $a / $b;
        echo "<hr>Divistion / result =".$ans;     }

    else if($o==5)
        {
          $ans = $a % $b;
        echo "<hr>modulo % result =".$ans;
        }
else{
    echo "<script>alert('your opration is not aviliable')</script>";
}
    
    
    }
    else
    {
            echo "<script>alert('Please Fillup the form')</script>";

    }
    
    ?>
    
</body>    
</html>


