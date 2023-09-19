<?php



function ForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . ' ';
        }
    }
}

ForLoop(2, 20, 2);

echo "\n";

function WhileLoop($start, $end, $step) {
    $value = $start;
    while ($value <= $end) {
        if ($value % 2 == 0) {
            echo $value . ' ';
        }
        $value += $step;
    }
}

WhileLoop(2, 20, 2);

echo "\n";
function DoWhileLoop($start, $end, $step) {
    $data = $start;
    do {
        if ($data % 2 == 0) {
            echo $data . ' ';
        }
        $data += $step;
    } while ($data <= $end);
}

DoWhileLoop(2, 20, 2);

?>
