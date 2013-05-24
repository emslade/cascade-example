<?php
require __DIR__ . '/bootstrap.php';

$site = $em->find('Entities\Site', $argv[1]);

$em->remove($site);
$em->flush();
