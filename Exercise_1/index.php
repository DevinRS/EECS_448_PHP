<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <?php
        $cols = 100;
        $rows = 100;

        echo "<table border=1\">";


        for ($r = 0; $r <= $rows; $r++){

            echo'<tr>';
            echo'<td>' .$r. '</td>';
            for($c = 1; $c <= $cols; $c++){
                if($r == 0){
                    echo '<td>' .$c. '</td>';
                }
                else{
                    echo '<td>' .$c*$r. '</td>';
                }
            }
            echo '</tr>';
        }

        echo"</table>";

    ?>
</body>
</html>