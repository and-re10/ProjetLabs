<?php

    function maxStr($variable, $maxStr){
        if (strlen($variable) > $maxStr) {
            return substr($variable, 0, $maxStr)."...";
        } else {
            return $variable;
        };
    };

    function nbPosts($variable){
        if (count($variable) !== 0){
            return count($variable);
        };
    };

    function nbElem ($variable){
        if (count($variable) < 2) {
            return '';
        } else {
            return 'height: 300px;';
        };
    };

    function editError($variable, $name = " "){
        // $myvar = $variable;
        if(empty(old($name))) {
            // $myvar = old($name);
            return $variable;
        } else {
            // $myvar = old($name);
            return old($name);   
        };
    };

?>