<?php

// to create qr-code

require_once '../phpqrcode/qrlib.php';

if(isset($_GET['text'])){
    $text = $_GET['text'];
    QRcode::png($text,false,'Q',5,5);
}