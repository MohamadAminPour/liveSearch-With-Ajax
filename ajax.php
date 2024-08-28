<?php
    $users = ['mmd','ali','sajad','mmdreza','alireza','mahdi','mmdhosein'];
    $name = $_GET['name'];
    $match = '';

    if(strlen($name) > 0){
        for($i = 0 ; $i < count($users) ; $i++){
            if(strtolower($name) === substr($users[$i] , 0 , strlen($name))){
                if($match === ''){
                    $match = $users[$i];
                }
                else{
                    $match = $match . ' , ' . $users[$i];
                }
            }
        }
    }
    echo $match;
?>