<?php
/*Вычислить max и min в одномерном массиве и поменять их местами
Необходимо использовать условно определяемые функции
*/
function swapMaxMinInArray($array=[]){
    if(is_array($array)){
        if(empty($array))return "Array is empty. Check your data, please.";
        function searchMinMax($arr){
            $max=max($arr);
            $key_max=array_search($max, $arr);
            $min=min($arr);
            $key_min=array_search($min,$arr);
            return [$max,$key_max,$min,$key_min];
        }
    }else {
        return "Your data is incorrect. Argument must be array. Check your data, please.";
    }
    list($max,$key_max,$min,$key_min)=searchMinMax($array);
    $array[$key_max]=$min;
    $array[$key_min]=$max;
    return $array;
}
?>