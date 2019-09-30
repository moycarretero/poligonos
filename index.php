<?php

require_once 'Cuadrado.php';

$lado = 10;

$c1 = new Cuadrado($lado);

echo "EL AREA DEL CUADRADO DE LADO $lado ES: " . $c1->calcularArea();

