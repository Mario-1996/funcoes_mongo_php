<?php

function insert($obj, $collection) {
    require_once __DIR__."/manager.php";

    $db = new \MongoDB\DriverBulkWrite;

    $db->insert($obj);

    $manager->executeBulkWrite($collection,$db);
}