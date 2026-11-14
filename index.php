<?php

// Ho aggiunto altri array associativi
$users = [
['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
['name' => 'Michele', 'surname' => 'Signorile', 'gender' => 'U'],
['name' => 'Celeste', 'surname' => 'Massaro', 'gender' => 'D'],
['name' => 'Anna', 'surname' => 'Pasqualicchio', 'gender' => 'D'],
['name' => 'Iris', 'surname' => 'Ciavarella', 'gender' => 'NB'],
['name' => 'Nicola', 'surname' => 'Losito', 'gender' => 'U'],
];

// Ho utilizzato il metodo foreach per ciclare facilmente tutto l'array, ed all'interno ho utilizzato l'if per specificare il saluto in base al genere che c'èera in ogni array associativo
foreach ($users as $pippo) {
    if ($user['gender'] == 'U') {
    echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    }
    elseif ($user['gender'] == 'D') {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
        
    }else {
            echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n" ;
    
    }
  
}
