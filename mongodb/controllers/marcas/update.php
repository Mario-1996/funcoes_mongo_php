<?php

require_once __DIR__."/../../core/mongo/update.php";

$id = new \MongoDB\BSON\ObjetcId($_POST['id']);

$filter=['id'=>$id];
$obj=['marca'=>$_POST['marca'],'descricao'=>$_POST['descricao']];
$collection='ecommerce.marcas';

update($filter,$obj,$collection);

echo "<script><location.href='marcas'></script>";