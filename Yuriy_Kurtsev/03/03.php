<?php

$cols = 15;
$rows = 15;

echo '<table border = "1">';

for($tr = 1; $tr <= $rows; $tr++){
    echo "<tr>";
        for($td = 1; $td <= $cols; $td++){
            if ($tr == 1 || $td == 1){
                echo '<th style="color:white;background-color:green;">'. $tr * $td .'</th>';
            } else {
                echo '<td>' . $tr * $td . '</td>';
            }
}
    echo '</tr>';
}
echo '</table>';



