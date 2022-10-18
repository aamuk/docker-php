<?php

require_once('array.php');

array_push($names, "Gerald");

function showarray($array) {
    echo 'Var Dump Array:';
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
}

function numberelementsarray($array) {
    echo 'There are ';
    echo count($array);
    echo ' elements in array';
}

showarray($names);

numberelementsarray($names);

$doublenums = array_map(
    function($num) {
        return $num * 2;
    }, $ages
);

var_dump($doublenums);
