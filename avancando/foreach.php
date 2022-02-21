<?php

  $contasCorrentes = [
    12345678910 => ["titular" => 'Poglia',
      "saldo"   => 1000
    ],
    12345678321 => ["titular" => 'Maria',
      "saldo"   => 10000
    ],
    12345678612 => ["titular" => 'Alberto',
      "saldo"   => 300
    ]
  ];

  foreach ($contasCorrentes as $cpf => $conta)
    echo "cpf: {$cpf} Titular: {$conta["titular"]}" . "</br>";