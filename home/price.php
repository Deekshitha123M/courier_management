<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>
<style>
    body {
        background-image: url('../images/exp22.png');
        background-size: cover;
        }
    h3{
        margin-left:650px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
</head>
<body>
    <table width='30%' border="5px solid" style="margin-top:30px;margin-left:auto ;margin-left:850px ;font-weight:bold;border-spacing: 5px 5px;border-collapse: collapse;">
    <tr style="background-color: cyan;font-size:30px">
    <th>Weight in Kg</th><th>Price</th>
    </tr>
    <tr>
    <td>0-1</td><td>120</td>
    </tr>
    <tr>
    <td>1-2</td><td>200</td>
    </tr>
    <tr>
    <td>2-4</td><td>250</td>
    </tr>
    <tr>
    <td>4-5</td><td>300</td>
    </tr>
    <tr>
    <td>5-7</td><td>400</td>
    </tr>
    <tr>
    <td>7-above</td><td>500</td>
    </tr>
    </table>
    <h3  style="margin-top:100px;color:black; font-family:lucida calligraphy;font-weight: bold;"> As per your courier's weight pay the amount on:</h3>
    <div style="margin-left:55% ;margin-right:50px ;font-weight:bold;">
    <ol>
    <li>UPI: kavya@okhdfcbank</li>
    <li>GPay: 9353829542</li>
    <li>PhnPay: 7483015746</li>
    </ol>
    </div>
</body>
</html>