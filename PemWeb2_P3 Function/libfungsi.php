<?php
 function kelulusan($nilai_total){
 	if ($nilai_total > 55){
 		return 'LULUS';
 	}else{
 		return 'TIDAK LULUS';
 	}
}
function grade($nilai_total){
    if($nilai_total>85-100){
        return 'A';
    }elseif($nilai_total>70-84){
        return 'B';
    }elseif($nilai_total>56-69){
        return 'C';
    }elseif($nilai_total>36-55){
        return 'D';
    }elseif($nilai_total>0-35){
        return 'E';
    }else{
        return 'I';
    }
}
function predikat($grade){
    switch ($grade){
        case 'A':
            return 'sangat memuaskan';
            break;
        case 'B':
            return 'memuaskan';
            break;
        case 'C':
            return 'cukup';
            break;
        case 'D':
            return 'kurang';
            break;
        case 'E':
            return 'sangat kurang';
            break;
        default:
            return 'tidak ada';
            break;
    }
}
?>