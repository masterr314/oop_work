<?php

class seq { 
    public function collatz_conjecture_range($start, $finish){
        $current = $start;
        while ($current <= $finish) {
            $range_result[$current] = $this->collatz_conjecture($current);
            $current++;
        }
        return $range_result;
    }

    public function collatz_conjecture($start){
        $result = [$start];
        $current = $start;
        while ($current != 1) {
            $current = $current % 2 == 0 ? $current / 2 : 3 * $current + 1;  
            array_push($result, $current);
        }
        return $result;
    }

    public function arithmetic_progression($first, $delta, $amount){
        $result = [];
        $counter = 0;
        while ($counter != $amount) {
            $next = $first + $counter * $delta;
            array_push($result, $next);
            $counter++;
        }
        return $result;
    }
}

?>