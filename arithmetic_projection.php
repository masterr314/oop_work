<?php
    require_once "seq.php";

    if (!empty($_POST["first"]) && !empty($_POST["delta"] && !empty($_POST["amount"]))){
        $seq = new seq();
        $result = $seq->arithmetic_progression(
            htmlentities($_POST["first"]), 
            htmlentities($_POST["delta"]), 
            htmlentities($_POST["amount"])
        );
        $len = count($result);
        foreach ($result as $index => $value) {
            echo $value;
            echo $len - 1 == $index ? "" : " -> ";
        };
    }
    else {
        echo "Wrong input data";
    }
?>