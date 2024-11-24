<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Produit de Deux Entiers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }
        input[type="number"] {
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcul du Produit de Deux Entiers</h1>
        <form method="post" action="">
            <label for="a">Entrez le premier entier:</label>
            <input type="number" id="a" name="a" required>
            <label for="b">Entrez le deuxième entier:</label>
            <input type="number" id="b" name="b" required>
            <input type="submit" value="Calculer">
        </form>

        <?php
        function calculate_product($a, $b) {
            return $a * $b;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['a']) && isset($_POST['b'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];

                if (is_numeric($a) && is_numeric($b)) {
                    $result = calculate_product($a, $b);
                    echo "<div class='result'>Le produit de $a et $b est $result.</div>";
                } else {
                    echo "<div class='result'>Veuillez entrer des entiers valides.</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>