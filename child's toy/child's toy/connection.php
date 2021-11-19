<?php
    $conn = pg_connect("postgres://rntxlyyxnzhpaf:e980fafd84975b3668d45257a79e58c5de9bb4daba12db767c4901e0eea64910@ec2-54-146-82-179.compute-1.amazonaws.com:5432/ddsahi6cstee4r");

    if(!$conn){
        die("Can not connect database");
    } 
?>