<html>
    <head>
    <title>php all practicals list and fully access all practicals</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    </head>
    
    
    <body id="particles-js">

        <div style=" margin:100px; font-size:1em;">
             <h1 align="center">PHP Practical List</h1>
        <table align="center" bgcolor="lightgreen" style="font-size:2em;">
            <tr>
            <th>Sr.No</th>
            <th>Practical List</th>
            </tr>
            
            <?php
            
            for($i=1;$i<=3;$i++)
            {
                ?>
            <tr style="color:white;">
            <td><?php echo $i; ?></td>
            <td><a style="color:white;" href="practical-list-<?php echo $i; ?>/">Practical-list-<?php echo $i; ?></a></td>
            
            </tr>
            <?php
        }
        ?>
            </table>
        </div>
        
        
        
         <!--link all js files-->
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    
</body></html>