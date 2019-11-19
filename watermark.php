<?php

$img = imagecreatefromjpeg('a.jpg');

imagestring($img,5,5,5,'Ricechips',imagecolorallocate($img,0,255,0));

header('Content-type: image/png');
imagepng($img);


// ps: black 100,116,163 ; red 255,0,0 ; white 255,255,255
