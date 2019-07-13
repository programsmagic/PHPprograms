<!DOCTYPE html>

<html>
<head>
    
    
    </head>
<body style="background-color:blue; padding:20px; ">
    <div style="color:white; background-color:powderblue; margin:3px;">
        <form action="" method="GET">
    <input type="text" name="loop" placeholder="Enter Value for product.." style="font-size:1em;"/>
    <input type="submit" name="ok" value="ok"/>
    
        </form>
    </div>
    <form action="result11.php" method="GET" style="background-color:blue; color:white;"> 
        <table border="2"  align="center" cellpadding="10">
        <tr >
        <td colspan="5" align="center" ><marquee style="color:red; background-color:black; font-size:2em;">Progarms_magic☻</marquee></td>
        </tr>
        <tr >
        <td colspan="5" align="center">Genrate bill for 10 products</td>
        </tr>
        
        <tr>
        <td>Sr.No:</td>
        <td>Product ID:</td>
        <td>Product Name:</td>
        <td>Unit Price:</td>
        <td>Quntity:</td>
        <!--td>Amount</td-->
        </tr>
       
<?php  if(isset($_GET['ok']))
            $end = $_GET['loop'];
       else
           $end = 0;
            
        for($i=0;$i<$end;$i++)
        {
            
        ?>
        <tr>
           
        <td><?php echo $i+1; ?></td>
        <td><input type="text" name="id<?php echo $i; ?>" required  min="0000000" max="999999999" /> </td>
        <td><input type="text" name="name<?php echo $i; ?>" required /> </td>
        <td><input type="text" name="price<?php echo $i; ?>" required  min="0000000" max="999999999" /> </td>
        <td> 
            
            <select name="q<?php echo $i; ?>" required>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
            <option value="7" >7</option>
            <option value="8" >8</option>
            <option value="9" >9</option>
            <option value="10" >10</option>
            <option value="11" >11</option>
            <option value="12" >12</option>
            <option value="13" >13</option>
            </select>
            
            </td>
        <!--td><input type="number" name="amount<?php //echo $i; ?>" required min="0000000" max="999999999" /> </td-->
        </tr>
        
        <?php 
            
        }
        
        $tamount = "------";
     ?>
        
        <tr>
        <td colspan="4"><input type="submit" name="submit" value="TOTAL Amount"/></td>
        <td><?php   echo $tamount;  ?></td>
        </tr>
    
        
        <input type="hidden"  name="end1" value="<?php echo $end; ?>" />
        </table>
    </form>
    
    
    </body>
</html>