<?php
    function calculate_range($start, $finish){
        $current = $start;
        while ($current <= $finish) {
            $range_result[$current] = calculate($current);
            $current++;
        }
        return $range_result;
    }

    function calculate($start){
        $result = [$start];
        $current = $start;
        while ($current != 1) {
            $current = $current % 2 == 0 ? $current / 2 : 3 * $current + 1;  
            array_push($result, $current);
        }
        return $result;
    }
?>