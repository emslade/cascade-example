<?php
require __DIR__ . '/bootstrap.php';

$site = new Entities\Site;

$domain = new Entities\Domain;

$site->addDomain($domain);
$domain->setDomain('foobar.com');
$domain->setSite($site);

$em->persist($site);
$em->flush();
