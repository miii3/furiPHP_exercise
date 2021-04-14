<?php
function calcArea($top, $bottom, $height) {
    return ($top + $bottom) * $height / 2;
}

function displayMsg($top, $bottom, $height, $area) {
    $msg = <<<EOM
台形のサイズ
function displayMsg($top, $bottom, $height, $area) {
面積 : {$area}\n
EOM;
    echo $msg;
}
function calcArea($top, $bottom, $height) {
    return ($top + $bottom) * $height / 2;