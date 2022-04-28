<?php

$idade = 21;

//Se deixar com aspas simples o php nгo vai compilar $idade como variбvel
echo 'Olб Mundo, minha idade й: $idade';

//Teria que usar uma notaзгo de pontos
echo 'Olб Mundo, minha idade й: ' . $idade;

//Com aspas duplas ocorre inferкncia de variбveis
echo "Olб mundo, minha idade й $idade.";

//PHP nгo quebra linhas, todos os testos acima serгo impressos um uma ъnica linha.

//Para ter quabra de linha й utilizado \n  mas esse formato pode acarretar problemas em diferente SOs
echo "\nOlб mundo, minha idade й $idade.";

//A forma mais segura de quebrar linhas й a concatenaзгo com .PHP_EOL (PHP_EndOfLine).
echo "Olб mundo, minha idade й $idade." . PHP_EOL;