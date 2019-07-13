<html>
<body style="background-color:#7C8E86; padding:30px;">


<?php

$tamount=0;
    ?>
<div style="background-color:solidwhite;">
   <table   align="center" cellpadding="10">
        <tr  style="background-color:pink">
        <td colspan="6" align="center">Genrate bill for 10 products</td>
        </tr>
        <div style="font-style:strong;">
        <tr style="background-color:yellow">
        <td>Sr.No:</td>
        <td>Product ID:</td>
        <td>Product Name:</td>
        <td>Unit Price:</td>
        <td>Quntity:</td>
        <td>Amount</td>
        </tr>
       </div>
<?php  
       $end= $_GET['end1'];
    //   echo $end;
       //echo "hello";
    //   echo $_GET['id0'];
        for($i=0;$i<$end;$i++)
        {
      //      echo "test";
            
       if($i%2==0)
       {
       ?>
        <tr style="background-color:lightgreen; color:white;">
        <td><?php echo $i+1; ?></td>
        <td><?php echo $_GET['id'.$i]; ?></td>
        <td><?php echo $_GET["name".$i]; ?></td>
        <td><?php echo $_GET['price'.$i]; ?></td>
        <td><?php echo $_GET['q'.$i]; ?> </td>
        <td><?php echo $result=$_GET['price'.$i] * $_GET['q'.$i];  ?> </td>
        <?php $tamount  = $tamount + $result; ?>
       </tr>
       <?php
       }
    else{
        ?>
        <tr style="background-color:lightblue; color:white;">
        <td><?php echo $i+1; ?></td>
        <td><?php echo $_GET['id'.$i]; ?></td>
        <td><?php echo $_GET["name".$i]; ?></td>
        <td><?php echo $a = $_GET['price'.$i]; ?></td>
        <td><?php echo $b = $_GET['q'.$i]; ?> </td>
        <td><?php echo $result=$_GET['price'.$i] * $_GET['q'.$i];  ?> </td>
        <?php $tamount  = $tamount + $result; ?>
       </tr>
        <?php
    }
        
        }
        
    
     ?>
        
        <tr style="background-color:powderblue;"
        <td colspan="5" align="center">TOTAL Amount</td>
        <td><?php   echo $tamount;  ?></td>
        </tr>
    
        
        
        </table>

</div>
</body>
</html>