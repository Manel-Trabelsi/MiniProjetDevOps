   <!DOCTYPE html>
   <html lang="fr">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Calcul du Produit de Deux Entiers</title>
       <link rel="stylesheet" href="styles.css">
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
   