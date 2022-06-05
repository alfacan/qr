<?php
require_code 'phpqrcode/qrlib.php';

$path = 'images/';
$file = $path.uniqid().".png";

$text = "Something";
QRcode::png($text,  $file);

echo "<img src='".$file."'>";
?>
