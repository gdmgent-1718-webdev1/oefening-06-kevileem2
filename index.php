<?php

$day = date('d');

function getMonth(){
    $monthFull = date('F');
    return $monthFull;
}

function getSeason() {
    $month = date('m');
    $day = date('d');
    if($month >= 3 && $month <= 6){
        if($month == 3){
            if($day < 21){
                return 'winter';
            }
            else{
                return 'lente';
            }
        } elseif($month == 6){
            if($day <= 20){
                return 'lente';
            }
            else {
                return 'zomer';
            }
        }
        else {
            return 'lente';
        }
    }
    elseif($month >= 6 && $month <= 9){
        if($month == 6){
            if($day < 21){
                return 'lente';
            }
            else{
                return 'zomer';
            }
        } elseif($month == 9){
            if($day <= 20){
                return 'zomer';
            }
            else {
                return 'herfst';
            }
        }
        else {
            return 'zomer';
        }
    }
    elseif($month >= 9 && $month <= 12){
        if($month == 9){
            if($day < 21){
                return 'zomer';
            }
            else{
                return 'herfst';
            }
        } elseif($month == 12){
            if($day <= 20){
                return 'herfst';
            }
            else {
                return 'winter';
            }
        }
        else {
            return 'herfst';
        }
    }
    elseif($month == 12 || $month <= 3){
        if($month == 12){
            if($day < 21){
                return 'herfst';
            }
            else{
                return 'winter';
            }
        } elseif($month == 3){
            if($day <= 20){
                return 'winter';
            }
            else {
                return 'lente';
            }
        }
        else {
            return 'winter';
        }
    }
}
function output(){
    $month = getMonth();
    $season = getSeason();
    echo "${month} <br>";
    echo $season;
}
output();