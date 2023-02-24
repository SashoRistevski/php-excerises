<?php

// if / else / elseif / else if

$score = 95;

if ($score >= 90){
    echo 'A';
    if ($score >= 95){
        echo 'A+';
    }
}elseif ($score >= 80){
    echo 'B';
} elseif ($score >= 70){
    echo 'C';
}elseif ($score >= 60){
    echo 'D';
} else{
    echo 'F';
}
