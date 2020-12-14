<?php 

if (!function_exists('clean_CPF')) {
    function clean_CPF($value) {

        $value = trim($value);
        $value = str_replace(".", "", $value);
        $value = str_replace(",", "", $value);
        $value = str_replace("-", "", $value);
        $value = str_replace("/", "", $value);
        
        return $value;
    }
}