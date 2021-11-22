<?php
    $conn = pg_connect("postgres://uvhzsnhlscjcvu:9af6452855fa45b0392512c7f33e95fa8e8034a8f5511a4392373158326f3286@ec2-107-23-213-65.compute-1.amazonaws.com:5432/d64h8hcu1o61fl");

    if(!$conn){
        die("Can not connect database");
    } 
?>