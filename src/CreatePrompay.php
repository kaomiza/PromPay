<?php
include "../modules/Config.php";

$source = OmiseSource::create(array(
    'amount' => 100000,
    'currency' => 'thb',
    'type' => 'promptpay'
));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatePrompay</title>
    <script>

    </script>
</head>

<body>
    <a href="/"> <?php echo "Home" ?></a>
    <p><?php echo $source["id"]; ?></p>
    <p><?php echo $source["amount"]; ?></p>
    <p><?php echo $source["currency"]; ?></p>
    <p><?php echo $source["type"]; ?></p>
    <br>
    <form action="../modules/CreateCharge.php" method="post">
        <input type="text" name="id" value="<?php echo $source["id"]; ?>" readonly>
        <br>
        <br>
        <button type="submit">CreateCharge</button>
    </form>
</body>

</html>