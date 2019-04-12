<?php


for($i=0;$i<10;$i++)
    echo(($i+1)."<br>");

$i=0;
while($i<10){
    echo(($i+1)."<br>");
    $i++;
}
$i=0;
do{
    echo(($i+1)."<br>");
    $i++;
}while($i<10);

$idades = [1,2,3,4,5];

foreach ($idades as $idade)
    echo($idade);

    
    
    
