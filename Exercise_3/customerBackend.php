<?php
    $password = $_POST['password'];
    $shoeqty = $_POST['shoeqty'];
    $ballqty = $_POST['ballqty'];
    $shirtqty = $_POST['shirtqty'];
    $shipping = $_POST['shippingradio'];

    $shoeprice = 40;
    $ballprice = 15;
    $shirtprice = 20;

    $subtotal1 = (intval($shoeqty)*$shoeprice);
    $subtotal2 = (intval($ballqty)*$ballprice);
    $subtotal3 = (intval($shirtqty)*$shirtprice);

    $shippingtotal = 0;
    if($shipping == '3-day'){
        $shippingtotal = 5;
    }
    else if($shipping == 'overnight'){
        $shippingtotal = 50;
    }

    $totalcost = $subtotal1 + $subtotal2 + $subtotal3 + $shippingtotal;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            overflow-y:hidden;
        }
    </style>
</head>
<body>
    <div class="signin">
        <div class="card">
            <div class="title">Receipt</div>
            <div class="inputfields">
                <div class="receipttext">
                    <p>$40/ Shoe (x<?php echo $shoeqty;?>)</p>
                    <p>$<?php echo $subtotal1;?></p>
                </div>
                <div class="receipttext">
                    <p>$15/ Ball (x<?php echo $ballqty;?>)</p>
                    <p>$<?php echo $subtotal2;?></p>
                </div>
                <div class="receipttext">
                    <p>$20/ Shirt (x<?php echo $shirtqty;?>)</p>
                    <p>$<?php echo $subtotal3;?></p>
                </div>
                <div class="receipttext">
                    <p>Shipping (<?php echo $shipping;?>)</p>
                    <p>$<?php echo $shippingtotal;?></p>
                </div>
                <div class="receipttext">
                    <p>Total</p>
                    <p>$<?php echo $totalcost;?></p>
                </div>
            </div>
            <div class="enjoy">Thanks for shopping!</div>
        </div>
        <p>Your Password: <?php echo $password;?></p>
    </div>
</body>
</html>