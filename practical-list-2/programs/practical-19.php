<html><head><link rel="stylesheet" href="style.css" ></head>
    <body id="co" style="background-color:black; font-size:2em; color:green; "><?php
for($i=100;$i<=1000;$i++)
{
    while($i%2==0)
    {
        echo $i."--";
       goto lable;  
    }
    echo "<p style='font-size:1em; color:red;>$i</p>";
    lable:

}
    


?></body></html>
