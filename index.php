<?php

//load the ar library
include 'phpqrcode/qrlib.php';

//data to be stored in qr
$text = "https://hudaazzuhri.github.io";
  
//file path
$file = "images/qr1.png";
  
//other parameters
$ecc = 'H';
$pixel_size = 20;
$frame_size = 5;
  
// Generates QR Code and Save as PNG
QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
  
// Displaying the stored QR code if you want
echo "<div><img src='".$file."'></div>";

?>