<?php
    function asset($path) {
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/EI_CamilaAlor_KevinTrinidad/public/' . ltrim($path, '/');
    }
?>
