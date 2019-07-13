<html>
    <head>
    <title>php all practicals list and fully access all practicals</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    </head>
    
    
    <body>
        
    <div id="particles-js">
        <!-- this is id for css-->
        <div style="padding:50px" id="particles-js" >
          <table border="1"  cellsapce="2" cellpadding="8" align="center">
        <tr>
            <th colspan="3" style="background-color:white; color:red; font-size:2em;">This is my Website For PHP Practicals</th>
        </tr>
        <tr id="particles-js" style="background-color:white;">
            <th>Practical No:</th>
            <th>Practical Name:</th>
            <th>practical link:</th>
        </tr>
        <?php
    $i = 1;
    
    $p = array(" Write a PHP script to validate email address entered by the user (without using HTML 5)"," Write a PHP script to calculate mod of two given integers without using modulus operator.","Write a PHP script to sort an array with 10 integer numbers. (Take input from users for array elements.)"," Create an associative array which stores name of country as key and name of its capital as value. Create minimum 20 elements. Sort the array according to name of capital and print."," Write a PHP script to delete an element from given array. After deletion index also should be deleted.","Write a PHP script to collect enrollment number and marks for DWPD subject for at least 50 students. Print enrollment numbers (with marks) of students with 5 highest and 5 lowest marks. ","Write a PHP script to merge two integer arrays. Find the maximum and minimum number for resultant array.","Write a PHP script to print odd and even numbers between 100 to 1000 without using if...else, ternary operator"," Write a PHP script to create an array of 20 elements which contains only string as their values. Find element having largest and smallest in length"," Write a PHP function to convert string into upper case."," Write a PHP function to convert string into lowercase."," Write a PHP function to find occurrences of every alphabetical character in a string.");
    for($i=0;$i <count($p);$i++)
    {
        ?>
            <tr style="background-color:white;">
                <td>
                    <?php $a=$i+12; echo $a."."; ?>
                </td>
                <td>
                    <a style="color:black;" href="programs/practical-<?php echo $a; ?>.php">
                        <?php echo $p[$i]; ?>
                    </a>
                </td>
                <td><a href="programs/Practical-<?php  echo $a; ?>.php">○-Run-○</a></td>
            </tr>
            <?php
    }
    ?>
            <tr bgcolor="lightblue"><td align="center" colspan="3">  <a href="index1.php" style="font-size:2em; color:black; font-family:monospace;" >Click Here for Next Programs 24 - 39</a></td></tr>
    </table>
    </div>
</div>
     
         <!--link all js files-->
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    
</body></html>