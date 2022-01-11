<?php

$db = mysqli_connect('localhost', 'root','', 'latihan__siakad');

if(!$db){
   echo "gagal terhubung - ".mysqli_connect_error();
}