<?php

header('Content-Type: text/html; charset=UTF-8');

require_once "vendor/autoload.php";

use Luisr\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('20230-010');

var_dump($resultado);