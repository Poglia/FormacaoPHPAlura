<?php

  $idade = 18;
  $numeroDePessoas = 2;

  echo "Voc� s� pode entrar se tiver a partir de 18 anos ou ";
  echo "a partir de 16 anos acompanhado" . PHP_EOL;

  if ($idade >= 18)
    echo "Voc� tem $idade anos. Pode entrar sozinho.";
  elseif ($idade >= 16 && $numeroDePessoas > 1)
    echo "Voc� tem $idade anos, est� acompanhado(a), ent�o pode entrar.";
  else
    echo "Voc� s� tem $idade anos. Voc� n�o pode entrar.";

  echo PHP_EOL;
  echo "Adeus!";