<?php

    header('Content-Type:text/html; charset=utf-8');

    $name= $_POST['name'];
    $email= $_POST['email'];

    echo "$name $email 이 등록되었습니다.";
?>