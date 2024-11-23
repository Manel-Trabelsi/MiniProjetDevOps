<?php
// index.php

// Chemin absolu vers le script Python
$pythonScript = '/path/to/your/script/calculate_product.py';

// Exécuter le script Python et récupérer le résultat
$result = shell_exec("python3 $pythonScript");

// Vérifiez si le résultat est obtenu
if ($result === null) {
    echo "<h1>Erreur d'exécution du script Python</h1>";
} else {
    // Afficher le résultat du script Python
    echo "<h1>Résultat du calcul:</h1>";
    echo "<p>$result</p>";
}
?>
