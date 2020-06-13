<?php

require_once __DIR__."/../../core/mongo/findall.php";

$collection='ecommere.marcas';

$data=findall($collection);

require_once __DIR__."/../../views/marcas/marcas.php";
