<?php

try {

    $baglanti = new PDO("mysql:host=127.0.0.1:3307; dbname=yazgel_3", 'root', '');

} catch (Exception $e) {

    echo $e->getMessage();

}

?>