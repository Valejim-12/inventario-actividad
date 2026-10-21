<?php

require_once __DIR__ . '/../src/validaciones.php';

$casosNombre = [
    ["nombre válido: Teclado", "Teclado", true],
    ["nombre vacío", "", false],
    ["nombre con espacios", "  ", false],
    ["nombre válido: Mouse", "Mouse", true]
];

$casosCantidad = [
    ["cantidad válida: 10", "10", true],
    ["cantidad válida: 1", "1", true],
    ["cantidad válida: 50", "50", true],
    ["cantidad vacía", "", false]
];

$correctas = 0;
$fallidas = 0;