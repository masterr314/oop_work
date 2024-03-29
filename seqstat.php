<?php
    
    require_once "seq.php";

    class seqstat extends seq 
    {   
        public function calculate_histogram($start, $finish) {
            $range_result = $this->collatz_conjecture_range($start, $finish);
            
            $histogram = array();
            
            foreach ($range_result as $number => $result) {

                $iters = count($result);
                
                if (array_key_exists($iters, $histogram)) {
                    $histogram[$iters] = $histogram[$iters] + 1;
                } 
                else {
                    $histogram[$iters] = 1;
                }

            }
            
            krsort($histogram);
            return $histogram;
        }
    }
