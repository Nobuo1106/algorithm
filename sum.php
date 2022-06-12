<?php
    // 区間の総和
    $a = [1, 5, 9, 7, 5, 3, 2, 5, 8, 4];
    $s = array_fill(0, 1 + count($a) , 0);
    $start_num = 2;
    $end_num = 7;
    
    $sum = 0;
    for ($i = $start_num - 1; $i <= $end_num - 1; $i++) {
        $s[$i + 1] = $s[$i] + $a[$i];
    }
    echo($s[$end_num] - $s[$start_num - 1]);
    
?>