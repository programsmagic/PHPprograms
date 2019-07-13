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
          <table border="2"  cellsapce="2" cellpadding="10" align="center">
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
    
    $p = array(" ","Hellow world","Table to show in php with html","Table with marqee  and color used in php program","intigration in php with html 120 data by loop ","Find Addition of First 50 even numbers","Which will inside 10 dif-Int num's and store in Array Find LARge Value","make a simple calculator using UDP Funcitons","using input and form tag practic || And Arithamtic Opration","simpal login form","simapal Student Form For get DATA","Simpal Bill genrate and get amount");
    for($i=1;$i <count($p);$i++)
    {
        ?>
            <tr style="background-color:white;">
                <td>
                    <?php echo $i."."; ?>
                </td>
                <td>
                    <a href="programs/practical-<?php echo $i; ?>.php">
                        <?php echo $p[$i]; ?>
                    </a>
                </td>
                <td><a href="programs/Practical-<?php echo $i; ?>.php">○-Run-○</a></td>
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