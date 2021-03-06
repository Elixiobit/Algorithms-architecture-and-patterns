<?php
require 'Autoload.php';


$user1 = new NewUsers('ilya', 'ilya@mail.ru', 12);
$user1->startSearch();

$user2 = new NewUsers('john', 'john@mail.ru', 17);
$user2->startSearch();
$user3 = new NewUsers('pety', 'pety@mail.ru', 2);
$user3->startSearch();
$user3->endSearch();
$vacancy = new Vacancy('PHP developer');
$user1->endSearch();
$vacancy2 = new Vacancy('JS developer');

