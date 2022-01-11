<?php
session_start();

$hapus_session = session_destroy();

if($hapus_session){
    header('Location: register.php?status=logout');
}