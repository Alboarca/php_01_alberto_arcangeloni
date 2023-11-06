<?php
// //Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $Numeri = [1,2,3,4,5,6,7,8,9,10];
// $Media = 0; //variabile per media
// $Count = 0; //variabile per numeri pari

// foreach($Numeri as $Numero) {
//     if($Numero % 2 === 0){
//         $Media += $Numero; // aggiungo numero a somma
//         $Count++; // incremento
//     }
// }

//  //media
// if($Count > 0){
//     $Mediafinale = $Media / $Count;
//     echo "la media è " . $Mediafinale;
// }else{
//     echo "Nessun numero pari presente";
// }
// //-------------------------------------------------------------------------------

//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

// $users = [
//     ["nome" => "Mario","cognome" => "Rossi", "genere" => "M"],
//     ["nome" => "Maria","cognome" => "Bianchi", "genere" => "F"],
//     ["nome" => "Luigi","cognome" => "Naglieri", "genere" => "M"]
// ];

// foreach($users as $user){
//     if ($user["genere"] === "M"){
//         echo "Buongiorno Sig. " . $user["nome"] ." " . $user["cognome"] . "\n"; 
//     }else if($user["genere"] === "F"){
//         echo "Buongiorno Signora " . $user["nome"] . " " . $user["cognome"] . "\n";
//     }
// }

// -Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".


for ($i = 1; $i <= 100; $i++) { 

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY" . "\n";
    } elseif ($i % 5 == 0){
        echo "JAVASCRIPT" . "\n";
    } elseif ($i % 3 == 0){
        echo "PHP" . "\n";
    }else{
        echo $i. "\n";
    };

}