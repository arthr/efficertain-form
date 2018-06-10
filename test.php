<?php
require_once 'bootstrap.php';

if (isset($_SERVER['HTTP_ORIGIN'])) {
    $address = 'http://' . $_SERVER['SERVER_NAME'];
    if (strpos($_SERVER['HTTP_ORIGIN'], $address) !== 0) {
        exit(json_encode([
            'error' => 'Invalid Origin header:' . $_SERVER['HTTP_ORIGIN'],
        ]));
    }
}

use Efficertain\Model\Lender;

$lender = new Lender();
$a = $lender->find(1)->with(['investmentProfile', 'assetsliabilitesbreakdown'])->get()->toJson();
echo $a;
