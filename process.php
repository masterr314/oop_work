<?php
    require_once "seq.php";

    if (!empty($_POST["start"]) && !empty($_POST["last"])) {
        $seq = new seq();
        $range_result = $seq->collatz_conjecture_range(
            htmlentities($_POST["start"]), 
            htmlentities($_POST["last"])
        );

        $max_num;
        $max_iters_range;
        $max_max_val_range;

        $min_num;
        $min_iters_range;
        $min_max_val_range;

        $show = function($num, $res){
            global $max_num, $max_iters_range, $max_max_val_range, $min_num, $min_iters_range, $min_max_val_range;
            $_max_val = max($res);
            $_iters = count($res);

            if (empty($max_iters_range) || $_iters > $max_iters_range) {
                $max_num = $num;
                $max_iters_range = $_iters;
                $max_max_val_range = $_max_val;
            }

            if (empty($min_iters_range) || $_iters < $min_iters_range) {
                $min_num = $num;
                $min_iters_range = $_iters;
                $min_max_val_range = $_max_val;
            }

            echo "<b>$num</b>"; 
            echo '<br/>Number of iterations: ' . $_iters;
            echo '<br/>Max value: ' . $_max_val;
        };

        foreach ($range_result as $number => $result) {
            $show($number, $result);
            echo "<br/><br/>";
        }

        echo "<hr/>";
        echo "<b>Max value: $max_num</b><br/>Iterations: $max_iters_range<br/>Max value: $max_max_val_range";
        echo "<br/><br/>";
        echo "<b>Min value: $min_num</b><br/>Iterations: $min_iters_range<br/>Max value: $min_max_val_range";

    }
    elseif (!empty($_POST["start"])){
        $seq = new seq();
        $result = $seq->collatz_conjecture(
            htmlentities($_POST["start"])
        );
        echo 'Iterations: <br/>';
        $len = count($result);
        foreach ($result as $index => $value) {
            echo $value;
            echo $len - 1 == $index ? "" : " -> ";
        }
        echo '<br/>Number of iterations: ' . $len;
        echo '<br/>Max value: ' . max($result);
    }
    else {
        echo "Wrong input data!";
    }
?>