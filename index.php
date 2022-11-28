<?php

// $nomeSujo = '    Alcides    ';

// // echo $nome;
// // echo '</br>';
// // echo trim($nome);

// $nomeLimpo = trim($nomeSujo);


// echo 'Nome Sujo: '.strlen($nomeSujo);
// echo '</br>';
// echo 'Nome Limpo: '.strlen($nomeLimpo);

//$nomeCompleto = 'alcides costa';

// echo strtolower($nome);
// echo '</br>';
// echo strtoupper($nome);

// $posicao = strpos($nomeCompleto, 'z');

// if($posicao > - 1) {
//   echo 'encontrou';
// } else {
//   echo 'não foi dessa vez';

// }
//  //starpos retorna a posição do caracter ou palavra dentro de uma string

// echo $posicao;


// echo ucfirst($nomeCompleto);//  ucfirst transforma a primeira letra da string em maiuscula

//echo ucwords($nomeCompleto); //  ucwords transforma a primeira letra de cada string em maiuscula

//$nomes = explode(' ', $nomeCompleto); explode // transforma a string em Array


//print_r($nomes);

$numero = 12913.12;

echo 'R$'. number_format($numero, 2,',','.'); //number_format é usado para formatar  numeros e casas deccimais
