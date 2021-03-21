<?php
function kelulusan ($_nilai){
    if($_nilai > 55){
        return "LULUS";
    }else {
        return "TIDAK LULUS";
    }
}

function grade ($_nilai){
    if($_nilai < 0 || $_nilai > 100){
        return "I";
    }elseif($_nilai >= 85 && $_nilai <= 100){
        return "A";
    }
    elseif($_nilai >= 70 && $_nilai <= 84){
        return "B";
    }
    elseif($_nilai >= 56 && $_nilai <= 69){
        return "C";
    }
    elseif($_nilai >= 36 && $_nilai <= 55){
        return "D";
    }elseif($_nilai >= 0 && $_nilai <= 35){
        return "E";
    }
}

function predikat ($_grade){
    if ($_grade == "A"){
        return "Sangat Memuaskan";
    }elseif ($_grade == "B"){
        return "Memuaskan";
    }elseif ($_grade == "C"){
        return "Cukup";
    }elseif ($_grade == "D"){
        return "Kurang";
    }elseif ($_grade == "E"){
        return "Sangat Kurang";
    }
}
?>