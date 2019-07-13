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
    
    $p = array("Create a web application which will accept two integer numbers through text boxes and display result for basic mathematical operations (i.e. + , -, *, /) on another page. [USE GET METHOD] ","Create a web application which will accept five different integer numbers through text boxes and display largest number among five numbers entered by user. [ USE POST METHOD ] ","Create a web application for review the movie as below...Display user submitted form to next page ","Create a web application for login system. On successful login user will land to a webpage (welcome.php) which will accept two integers through text boxes and print the addition of it to another page. On unsuccessful login it will ask again to enter username and password. Provide logout option. Also secure that welcome.php cannot be accessed without successful login. ","Create a web application to create user registration. Take inputs for username, password, email id, mobile number only. Insert the data into MySQL database on successful registration","Perform Practical No. (43) Using data you have insert into database using Practical No. (44) ","Accept movie reviews using form you have created in practical no 42) for atleast 10 different movies. Display list of movies in ascending order base on their ratings. ");
    for($i=0;$i <count($p);$i++)
    {
        ?>
            <tr style="background-color:white;">
                <td>
                    <?php $a=$i+40; echo $a."."; ?>
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
            
    </table>
    </div>
</div>
     
         <!--link all js files-->
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    
</body></html>