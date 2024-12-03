<?php
    function asset($path) {
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/EI_CamilaAlor_KevinTrinidad/public/' . ltrim($path, '/');
    }

    function asset_general($path){
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/EI_CamilaAlor_KevinTrinidad/' . ltrim($path, '/');
    }
?>
