<html>
<body>

<?php
    $name = $_POST["name"];

    $num_pep = $_POST["pepNum"];
    $num_AD = $_POST["adNum"];
    $num_cheese = $_POST["cheeseNum"];

    if ($name == NULL) {
            $name = "Utilisateur Inconnu";
        }

        if ($num_pep == NULL) {
            $num_pep = 0;
        }

        if ($num_AD == NULL) {
            $num_AD = 0;
        }
        
        if ($num_cheese == NULL) {
            $num_cheese = 0;
        }

    $total_pizza = $num_pep + $num_AD + $num_cheese;
    
    $info_to_append = "name: $name\n number of pepperonis: $num_pep\n number of all dressed: $num_AD\n number of cheese: $num_cheese\n\n";

    $myfile = fopen("datafile.txt", "a");
    fwrite($myfile, $info_to_append);
    fclose($myfile);


    echo "<h1>Yo $name Osti de gros cochon, 
    tu veux un total de $total_pizza pizzas! 
    Criss que t gros en tabarnak!</h1>";

?>

<a href="index.php" ><button>Back</button></a>

</body>
</html>