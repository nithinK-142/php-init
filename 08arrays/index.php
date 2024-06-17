<?php
    // create array
    $ar = array("abc", "mno", "pqr", "xyz");
    $arr = ["apple","banana","cherry","dragonfruit","evi"];


    function displayArrayContent($arr, $message){
        echo "\narray after ".$message."\n";
        // display array
        echo "[ ";
        for($i = 0; $i< count($arr); $i++){
            echo $arr[$i]. ", ";
        }
        echo "]\n";
    }

    // display array
    displayArrayContent($arr, "default");


    // unset
    unset($ar[0]);
    displayArrayContent($ar, "unset");


    splice
    $spliceArr = array_splice($arr, 0,1);
    displayArrayContent($spliceArr, "splice");
    displayArrayContent($arr, "default");
    
    displayArrayContent($arr, "default");
    array_splice($arr, 2,0, "orange");
    displayArrayContent($arr, "splice");

    // sort
    sort($arr);
    displayArrayContent($arr, "sort");

    push
    array_push($ar, "zzz");
    displayArrayContent($ar, "push");

    $tasks = [
        "get milk" => "Milly",
        "wash dishes" => "Daniel",
        "get bread" => "brandon",
    ];


    // sort($tasks);
    // foreach ($tasks as $task => $person) {
    //     echo "Task: $task, Assigned to: $person\n";
    // }
?>