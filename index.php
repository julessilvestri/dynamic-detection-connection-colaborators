<?php

require_once 'entities/DbPdo.php';
require_once 'entities/Session.php';

$dbPdo = new DbPdo();
$session = new Session("silvejul", "test");

var_dump($session->user);
