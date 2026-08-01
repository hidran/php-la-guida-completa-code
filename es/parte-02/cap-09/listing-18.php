<?php
$ar = ['red', 'blue', 'green', 'yellow'];
$total = count($ar);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ciclo while</title>
    <style>
        body {
            background: #ccc;
            color: #000;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <ul>
        <?php
        $i = 0;
        while ($i < $total) {
            echo "<li>{$ar[$i]}</li>";
            $i++;
        }
        ?>
    </ul>
</body>
</html>
