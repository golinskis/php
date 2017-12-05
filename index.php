<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 14</title>
    
    <style>
        table{
            background-color: aqua;
            border: solid 1px black;
        }
    
    
    
    </style>
</head>
<body>
<?php


    
    for($i=1;$i<11;$i++){
        echo "<table><tr>";
        for($j=1;$j<11;$j++){
            
            echo "<td>$i*$j"."=".$i*$j."</td>";
        }
        echo "</tr></table>";
    }
    
    
    
    
    ?>

</body>
</html>