<?php 
    $myArray = array();
    if (empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong. <br>";
    } else {
        echo "Array terdefinisi dan tidak kosong";
    }

    if (empty($nonExistentVar)) {
        echo "Variable tidak terdefinisi atau kosong";
    } else {
        echo "Variable terdefinisi atau tidak kosong";
    }
?>