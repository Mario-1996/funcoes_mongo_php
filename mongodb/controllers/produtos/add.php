<?php

require_once __DIR__."/../../core/mongo/findall.php";

    $collection='ecommerce.marcas';
    $marcas=findall($collection);

require_once __DIR__."/../../views/produtos/add.php";