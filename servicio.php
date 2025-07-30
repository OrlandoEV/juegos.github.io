<?php
header('Content-Type: application/json');

$juegos = [
    "juego1" => "Minecraft",
    "juego2" => "The Legend of Zelda",
    "juego3" => "Super Mario Bros"
];

echo json_encode($juegos);
?>
