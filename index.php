<?php

print_r($_POST);

// $nome;
// $nota1;
// $nota2;
// $nota3;

$nome= $_POST["nome"];
$nota1= $_POST["nota1"];
$nota2= $_POST["nota2"];
$nota3= $_POST["nota3"];


$mediaNotas= ($nota1 + $nota2 + $nota3) / 3;



echo "A média de $nome é: $mediaNotas"; 



if($mediaNotas>6){
    echo "O(a) aluno(a) $nome foi Aprovado(a)!!!";
    }else
    if(($mediaNotas<4) && ($mediaNotas>=6)){
    echo "O(a) aluno(a) $nome está de Recuperação!!!";
    }else{
     echo "O(a) aluno(a) $nome foi Reprovado!!!";
     }

    //  switch  {
    //     case $mediaNotas == "O(a) aluno(a) $nome foi Aprovado(a)!!!";

    //           //código referente ao valor1
    //           break;
    //     case valor2:
    //           //código referente ao valor2
    //           break;
    //     case valorN:
    //           //código referente ao valorN
    //           break;
    //     default:
    //           //código caso nenhuma condição seja atendida
    //           break;