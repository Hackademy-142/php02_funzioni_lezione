<?php
// echo, var_dump, print_r
//! USER Functions 
// 1. DICHIARARE

function nome()
{ //*  iniziale minuscola, no spazi vuoti, no numeri, underscore
    //corpo della funzione
}

//2. Richiamare
nome();

function saluta()
{
    echo "ciao";
}

function sum($n, $n1) //passare dei dati variabili alla funzione: PARAMETRI FORMALI
{
    echo $n + $n1;
}

//sum(54, 45); // PARAMETRI REALI - si assegnano in base al  POSIZIONAMENTO

//!PARAMETRI DI DEFAULT 

function somma($n = 10, $n1)
{
    echo $n + $n1 . "\n";
}
//somma(1, 2); //output 3 - i parametri reali inseriti dall'utente hanno sempre la PRIORITA'
// somma(1, 2);


function presentati($name, $surname)
{
    echo "Ciao, mi chiamo $name, il mio cognome è $surname \n";
}
// presentati("caldarulo", "annalisa");

//! SCOPE VISIBILITA' - porzione di codice in cui è visibile una variabile 

// let x = 2; 

// function print(){
//     console.log(x);
// }

const NUMERO = 2;
// print(); //output - 2
//! SCOPE LOCALE - VISIBILI SOLO NELLA PORZIONE DI CODICE IN CUI SONO DICHIARATE
//costanti sono sempre GLOBALI -  SUPERGLOBALS
$x = 2; //dichiaratoo una variabile 
function printNumber($num) //passaggio per valore
{
    $num = $num + 1;
    return $num;
    // echo $num . "\n";
    // echo NUMERO;
}
// printNumber($x);
// print_r([1,2,3]);
// echo "\n";
// var_dump(printNumber(3));



function printNumberRiferiferimento(&$num) //passaggio per riferimento
{
    $num = $num + 1;
    echo $num . "\n";
    // echo NUMERO;
}
// printNumberRiferiferimento($x);

//! PARAMETRI VARIABILI

function sommaNumeri(...$numbers) //spread operator -> restituisce un array di dati
{
    $result = 0;
    //var_dump($numbers);
    foreach ($numbers as $number) { //! provate anche con ciclo for, array_reduce()
        // $result = $result + $number;
        $result += $number;
    }
    return $result; // fate uscire il valore dalla funzione
}
$risultato = sommaNumeri(1, 2, 3, 4, 5, 7);

// echo $risultato;
function sumReduce(...$numbers)
{
    $result = array_reduce($numbers, function ($acc, $el) {
        // return $acc += $el;
        return $acc = $acc + $el;
    });
    return $result;
}
// echo $risultato;
sumReduce(1, 2, 3, 4, 5);
