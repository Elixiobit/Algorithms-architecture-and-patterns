<?php
require 'Autoload.php';

$payer = new Payer(7200, 89993335544);
$payer->payment(new Qiwi());

$payer2 = new Payer(9999, 89993335555);
$payer2->payment(new Yandex());

$payer3 = new Payer(11, 1111111111);
$payer3->payment(new WebMoney());