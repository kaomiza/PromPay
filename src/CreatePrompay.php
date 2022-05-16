<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatePrompay</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host;
        $.ajax({
            type: "GET",
            url: baseUrl + "/modules/CreateCharge.php",
            dataType: "json",
            encode: true,
        }).done(function(data) {
            console.log(data.scannable_code.image.download_uri);
        });
    </script>
</head>

<body class="page2">
    <div class="container-fluid m-0 p-0">
        <img src="../assets/image/2.jpg" alt="image2" class="img-fluid">
        <div >
            <img src="https://api.omise.co/charges/chrg_test_5rtuq72p078sq7s7lym/documents/docu_test_5rtuq74vaa4n0y0rm55/downloads/9AE016DBFD6782C9" class="prompay" />

        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>