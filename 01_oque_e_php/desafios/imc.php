<?php
  $peso = 60;
  $altura = 1.74;
  $imc = $peso / $altura ** 2;

  echo "Seu IMC � de $imc. Voc� est� com o IMC ";

  if ($imc < 18)
    echo "abaixo";
  else if ($imc < 25)
    echo "dentro";
  else
    echo "acima";

  echo " do recomendado" . PHP_EOL;
