<?php
if (empty($_GET)===false) {
    $priLetra = $_GET['priLetra'];
    $mesNascimento = $_GET['mesNascimento'];
    $diaNascimento = $_GET['diaNascimento'];
}
$frase = "Sua FakeNews Aparecera Aqui";

$vetor1 = [
    "a" => "água com limão", 
    "b" =>"Bacon", 
    "c" =>"Cúrcuma", 
    "d" =>"Doce de leite",
    "e" =>"Azeite",
    "f" =>"Frango",
    "g" =>"Gengibre",
    "h" =>"Adoçante",
    "i" =>"Açucar",
    "j" =>"Jiló",
    "k" =>"Comida Japonesa",
    "l" =>"Leite",
    "m" =>"Macarrão",
    "n" =>"Nata",
    "o" =>"Ovo",
    "p" =>"Pizza",
    "q" =>"Óleo de cooc",
    "r" =>"Rabanada",
    "s" =>"Suco detox",
    "t" =>"Sal rosa",
    "u" =>"Glutamina",
    "v" =>"Jiló",
    "w" =>"Peixe",
    "x" =>"Própolis",
    "y" =>"Kumbucha",
    "z" =>"Peixe",
    
];

$vetor2 = [
    "ao acordar",
    "pré-treino",
    "amassado com limão",
    "no cabelo",
    "em Jejum",
    "de 3 em 3 horas",
    "no chá",
    "no café",
    "Depois das 18h00",
    "antes da aula",
    "misturado na àgua",
    "antes do almoço"
];

$vetor3 = [
    "diminiu o inchaço",
    "previne infarto",
    "cura dor de dente",
    "limpa o fígado",
    "deixa mais inteligente",
    "limpa as artérias",
    "deixa musculos@",
    "fortalece a unha",
    "mata",
    "dá sorte",
    "da azar",
    "causa cancer",
    "causa sono",
    "deixa sua pele macia",
    "faz o cabelo crescer",
    "deixa mais burro (ainda mais do que voce já é)",
    "imuniza contra o covid",
    "te deixa mais alto",
    "faz voce começar a gostar de Kpop (Extremamente perigoso)",
    "limpa o pulmão",
    "melhora a visão",
    "causa cegueira",
    "fas vose comessar a iscrever érradu",
    "te deixa imortal",
    "causa queda de cabelo",
    "aumenta a criatividade",
    "envelhece",
    "faz você explodir :D",
    "causa insonia",
    "causa perda de apetiti",
    "não faz nada"
];
if (empty($_GET)===false) {
    $frase = $vetor1[$priLetra]." ".$vetor2[$mesNascimento-1]." ".$vetor3[$diaNascimento-1];
}
require 'Atividade3.php';