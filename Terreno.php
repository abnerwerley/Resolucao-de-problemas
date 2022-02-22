<?php

/**
 * Em um determinado município todas as construções civis redidênciais devem seguir algumas regras, elas são:
 *
 * 1. A residência construída não pode ser maior que 80% do terreno útil(sem contar a calçada);
 * 2. O terreno útil é o espaço total, com exceção de muros e calçada(recuo);
 * 3. O terreno deve ter pelo menos 2 metros de recuo para a construção da calçada;
 * 4. A calçada compreende toda largura do terreno;
 * 5. O restante da área não construída deverá ter 30% de área verde
 *
 * OBS: para esse exercício desconsiderar área do muro.
 *
 * Considerando um terreno total de 190 metros quadrados (10m de largura e 19 de comprimento) crie expressões aritméticas que calcule qual é a
 * maior área de residência possível de ser construída e determine a área verde, respeitando todas as normas citadas anteriormente.
 *
 */

$largura = 10;
$comprimento = 19;
$areaTotal = $largura * $comprimento;
$calcada = $largura * 2;
//$muros = 0.3;]
$terrenoUtil = $areaTotal - $calcada;
$areaResidencia = 0.8 * $terrenoUtil;
$areaQuintal = $terrenoUtil * 0.2;
$areaVerde = 0.3 * $areaQuintal;

echo "O limite de construção da residência é de $areaResidencia m²." . PHP_EOL;
echo "A área verde (30% do quintal) é de $areaVerde m²." . PHP_EOL;
