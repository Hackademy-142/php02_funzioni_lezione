<?php

$password = readline('Inserisci una password: ');
//! deve avere almeno 8 caratteri

// if (strlen($password) >= 8) {
//     echo "Password accettata \n";
// } else {
//     echo "Password non accettata \n";
// }

function checkLength($string)
{
    if (strlen($string) >= 8) {
        return true;
    } else {
        return false;
    }
}


// almeno una maiuscola
// for ($i = 0; $i < strlen($password); $i++) {
//     // var_dump($password[$i]);
//     if (ctype_upper($password[$i]) == true) {
//         echo "maiuscola trovata \n";
//     } else {
//         echo "maiuscola non trovata \n";
//     }
// }

function checkUppercase($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i]) == true) {
            // echo "maiuscola trovata \n";
            return true;
        }
    }
    return false;
}


//almeno un numero

// for ($i = 0; $i < strlen($password); $i++) {
//     // var_dump($password[$i]);
//     if (is_numeric($password[$i]) == true) {
//         echo "numero trovato \n";
//     } else {
//         echo "numero non trovato \n";
//     }
// }

function checkNumber($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i]) == true) {
            return true;
        }
    }
    return false;
}


//almeno un carattere speciale
// $specials = ['!', "?", "*", "@"];
// for ($i = 0; $i < strlen($password); $i++) {
//     if (in_array($password[$i], $specials)) {
//         echo "carattere speciale trovato \n";
//     } else {
//         echo "carattere speciale non trovato \n";
//     }
// }

function checkSpecials($string)
{
    $specials = ['!', "?", "*", "@"];
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $specials)) {
            return true;
        }
    }
    return false;
}


function checkPassword($string)
{
    //!prima opzione
    $rule1 = checkLength($string);
    $rule2 = checkUppercase($string);
    $rule3 = checkNumber($string);
    $rule4 = checkSpecials($string);
    var_dump($rule1, $rule2, $rule3, $rule4);

    if ($rule1 && $rule2 && $rule3 && $rule4) { //se tutti sono TRUE
        return true;
    } else {
        return false;
    }
    //! seconda opzione (Stringata)
    // return  checkLength($string) && checkUppercase($string) && checkNumber($string) && checkSpecials($string);
}
$risultato = checkPassword($password);
echo "risultato finale: ";
var_dump($risultato);
