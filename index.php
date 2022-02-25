<?php
require_once __DIR__.'/classi/Film.php';

$programmazione = [
    new Film("Il Signore degli Anelli - La Compagnia dell'Anello", "Peter Jackson", "Fantasy"),
    new Film("Il Signore degli Anelli - Le due torri", "Peter Jackson", "Fantasy"),
    new Film("Il Signore degli Anelli - Il ritorno del re", "Peter Jackson", "Fantasy"),
    new Film("Sin City", "Robert Rodriguez, Frank Miller, Quentin Tarantino", "Thriller, Noir, Azione, Giallo, Grottesco, Orrore"),
    new Film("Amici miei - Atto I", "Mario Monicelli", "Commedia"),
    new Film("Amici miei - Atto II", "Mario Monicelli", "Commedia"),
    new Film("Amici miei - Atto III", "Mario Monicelli", "Commedia"),
    new Film("La corazzata Potëmkin", "Sergej Michajlovič Ėjzenštejn", "Storico, Drammatico"),
    new Film("El Camino - Il film di Breaking Bad", "Vince Gilligan", "Drammatico, Thriller, Azione"),
    new Film("Smetto quando voglio", "Sydney Sibilia", "Commedia, Azione"),
    new Film("Smetto quando voglio - Masterclass", "Sydney Sibilia", "Commedia, Azione"),
    new Film("Smetto quando voglio - Ad honorem", "Sydney Sibilia", "Commedia, Azione"),
    new Film("Lo chiamavano Jeeg Robot", "Gabriele Mainetti", "Thriller, Fantastico, Noir")
];

$programmazione[0]->setVoto("5/5");
$programmazione[1]->setVoto("5/5");
$programmazione[2]->setVoto("5/5");
$programmazione[3]->setVoto("4/5");
$programmazione[4]->setVoto("4/5");
$programmazione[5]->setVoto("3/5");
$programmazione[6]->setVoto("3/5");
$programmazione[8]->setVoto("4/5");
$programmazione[12]->setVoto("4/5");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            foreach($programmazione as $film){
                echo "<h3>{$film->getTitolo()}</h3>";
                echo "{$film->getInfo()}";
                echo "<li><b>Voto:</b> {$film->getVoto()}</li>";
            }
        ?>
    </ul>

<!--
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
    metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
        => all’interno della classe sono dichiarate delle variabili d’istanza
        => all’interno della classe è definito un costruttore
        => all’interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->
</body>
</html>