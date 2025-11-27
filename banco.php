<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .banco td{
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
<?php 
    define("SIZE",7);
?>
<table class="banco" border="1" cellspacing="0">
    <?php
    for($i=0;$i<SIZE;$i++)
    {
        echo '<tr>';
        for($j=0;$j<SIZE;$j++)
        //if(($i%2==0 && $j%2==0) || ($i%2==1 && $j%2==1))
        if(($i+$j)%2==0)
            echo '<td bgcolor="#000"></td>';
        else
            echo '<td></td>';
        echo '</tr>';
    }
    ?>
</table>    
</body>
</html>