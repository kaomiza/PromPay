<?php
include "../modules/Config.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $change = OmiseCharge::create(array(
        'amount' => 100000,
        'currency' => 'thb',
        'source' => $id
    ));
}

// print_r($change);

$_SESSION['source'] = json_encode($change["source"]);


header("location: ../src/ChargePayment.php");
exit(0);
