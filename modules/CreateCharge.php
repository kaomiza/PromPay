<?php
include "../modules/Config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {


    $source = OmiseSource::create(array(
        'amount' => 2000,
        'currency' => 'THB',
        'type' => 'promptpay'
    ));

    $id = $source["id"];

    $change = OmiseCharge::create(array(
        'amount' => 2000,
        'currency' => 'THB',
        'source' => $id
    ));
}

// print_r($change);

echo json_encode($change["source"]);
