<?php 
//require_once 'class_medical_record.php';

function input_checker( $inpName ,  $default){
    if(isset($inpName)){
        return $inpName;
    }else{
        return $default;
    }

}



?>