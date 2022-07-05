<?php
$clave_cifrada = hash("sha512",12345);
echo $clave_cifrada;
$clave = 12345;
$clave_cifrada = hash("sha512", "m7x".$clave);
echo "\n";
echo $clave_cifrada;