<html>
    <head>
    <title>Input and Form Tag using PHP programs</title>
        <style>
            #in{
                color: chartreuse;
                border-radius:10px;
                border-color:red;
                
            }
            #in:hover{
                border-color: darkturquoise;
                border-bottom-color: darkgreen;
                color: blue;
            }
            #bg{
                
                background:yellowgreen;
                width: 100%;
                height: 100%;
            }
        
        </style>
    </head>
<body id="bg">
    <h1 align='center' style="padding:20px;">using Input tag and form tag</h1><br/>
    <hr>
    
    <div >
        <form align="center" action="" method="GET"  style="font-size:5em;" >
            <label>username :</label><br/>
            <input type="text" name="value1" class="in" id="in"/><br/>
            <label>password :</label><br/>
            <input type="text" name="value2" style="color:blue;" id="in"/><br/>
            <input type="submit" name="submit" value="login" style="color:red;" id="in"/><br/>
        </form>
    </div>
    </body>
</html>

<?php

if(isset($_GET['submit']))
{

    
    
    
}
?>