<?php
    $hora = 3;
    if ($hora > 6 and $hora <= 12) {
        echo "Bom dia";
    } elseif ($hora > 12 and <= 18) {
        echo "Boa tarde";
    } elseif ($hora > 18 and <= 24) {
        echo "Boa noite";
    } else {
        echo "Bons sonhos...";
    }
?>