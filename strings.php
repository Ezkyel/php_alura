<?php

$idade = 21;

//Se deixar com aspas simples o php n�o vai compilar $idade como vari�vel
echo 'Ol� Mundo, minha idade �: $idade';

//Teria que usar uma nota��o de pontos
echo 'Ol� Mundo, minha idade �: ' . $idade;

//Com aspas duplas ocorre infer�ncia de vari�veis
echo "Ol� mundo, minha idade � $idade.";

//PHP n�o quebra linhas, todos os testos acima ser�o impressos um uma �nica linha.

//Para ter quabra de linha � utilizado \n  mas esse formato pode acarretar problemas em diferente SOs
echo "\nOl� mundo, minha idade � $idade.";

//A forma mais segura de quebrar linhas � a concatena��o com .PHP_EOL (PHP_EndOfLine).
echo "Ol� mundo, minha idade � $idade." . PHP_EOL;