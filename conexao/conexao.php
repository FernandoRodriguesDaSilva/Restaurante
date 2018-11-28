   <?php

        $server = 'localhost';
        $user = 'root';
        $password = 'root';
        $db_name = 'restaurante';

        $db_connect = new mysqli($server,$user,$password,$db_name);
        mysqli_set_charset($db_connect,"utf8");

        if ($db_connect->connect_error) {
            echo 'Falha: ' . $db_connect->connect_error;
        } 