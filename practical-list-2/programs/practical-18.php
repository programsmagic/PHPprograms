<html><head><link rel="stylesheet" href="style.css"></head>
      <body>
<div align="center " style="width:600px; font-size:1.5em;">
    <?php
for($i=0;$i<6;$i++)
{
$a[$i] = rand(0,100);
}
    echo "<h1>Array1</h1>";

for($i=0;$i<6;$i++)
{
    echo "<input placeholder='".$a[$i]."' id='submit'>";
}
for($i=0;$i<6;$i++)
{
$b[$i] = rand(0,100);
}echo "<h1>Array2</h1>";
for($i=0;$i<6;$i++)
{
    echo "<input placeholder='".$b[$i]."' id='submit'>";
}
$k=0;
for($i=0;$i<count($a);$i++)
{
    $c[$i] = $a[$i];
$k++;
}
for($i=0;$i<count($a);$i++)
{
        $c[$k] = $b[$i];
$k++;
}

echo "<h1>Array Merged array</h1>";

for($i=0;$i<count($c);$i++)
{
    echo "<input placeholder='".$c[$i]."' id='submit'>";
}?>
</div></body></html>