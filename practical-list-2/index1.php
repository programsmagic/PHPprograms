

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
          <table border="1"  cellsapce="2" cellpadding="5" align="center">
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
    
    $p =array("Write a PHP function to find prime numbers between given range.","Write a PHP script to find duplicate values from given array."," create 2 dimensional array [5 x 5]. Take values from user and store it in array. Find unique values from this array and store all unique values in single dimensional array ","Write a PHP script to find minimum and maximum numbers from given array using library functions."," Write a PHP script to check if a string contains a specific string or not."," extract username from email ID. Write a PHP script to extract country code from telephone numbers. (Format for telephone numbers should be +XXX-XXX-XXXXXX) "," Write a PHP script to replace “abc” in following string with “def”."," Write a PHP script to replace the string in given string. (Take input from the user for search string, replace string and operated string)","Find out on which day Republic day and Independence day will come in current year."," Find out which date and day will come after 7 days from current day.","Create a PHP script to take date input from the user and check whether this date is valid or not."," Write a PHP script to find out how many days remaining for your next birthday"," Write a PHP script to print current date in dd-mm-yyyy format."," Write a PHP script to find number of days between two given dates.","Write a PHP script to find whether entered date is weekend or not","Write a PHP script to find current age of a person.");
    for($i=0;$i <count($p);$i++)
    {
        ?>
            <tr style="background-color:white;">
                <td>
                    <?php $a=$i+24; echo $a."."; ?>
                </td>
                <td>
                    <a style="color:black;" href="programs1/practical-<?php echo $a; ?>.php">
                        <?php echo $p[$i]; ?>
                    </a>
                </td>
                <td><a href="programs1/Practical-<?php  echo $a; ?>.php">○-Run-○</a></td>
            </tr>
            <?php
    }
    ?>
            </table>
    </div>
</div>
     
         <!--link all js files-->
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    
</body></html>