<!DOCTYPE html>
<html lang="en">


<style>
table.table{
  font-size:1.5em;
  text-align:center;
  width:60%;
  margin-left:auto;
  margin-right:auto;
  border-style:outset;
  border-width:0.3em;
  border-color:#6666dd;}

th.head{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#44bbbb;}
td.cell1{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#8888ff;}
td.cell2{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#88ff88;
}
</style>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Form></title>
</head>

<body>

<?php 
$min = $_GET["min"];
$max = $_GET["max"];
$c1 = $_GET["c1"];
$c2 = $_GET["c2"];
$c3 = $_GET["c3"];
$c4 = $_GET["c4"];
$c5 = $_GET["c5"];

echo $min . "<br>";
echo $max. "<br>";
echo $c1. "<br>";
echo $c2. "<br>";
echo $c3. "<br>";
echo $c4. "<br>";
echo $c5. "<br>";

echo "<table class = 'table'>";
echo "<tr><th>Party Size\\Cost Per Person</th><th class = 'head'>$c1</th><th class = 'head'>$c2</th><th class = 'head'>$c3</th><th class = 'head'>$c4</th><th class = 'head'>$c5</th></tr>";


function generateRow($n){

    echo "<tr>";
    for($i=1;$i<=5;$i++){
    $product = $i * $n;
    if ($i == 1){echo "<td class='cell1'>$product</td>";}
    else{echo "<td class='cell2'>$product</td>";}
    
    }
    echo "</tr>";
    }
while ($min <= $max){
    generateRow($min);
    $min += 5;
    if ($min >= $max){
        generateRow($max);
    }
}
    
echo "</table>";


?>


</body>
</html>