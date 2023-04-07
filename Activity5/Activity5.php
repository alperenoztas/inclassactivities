<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="Activity5.php" method="post">
        <label>From:</label>
        <input type="text" name="from" id="from" value="0">

        <label>Currency:</label>
        <select name="from-currency" id="from-currency">
            <option value="USD">US Dollar</option>
            <option value="CAD">Canadian Dollar</option>
            <option value="EUR">Euro</option>
        </select> <br>

        <label>To:</label>
        <input type="text" name="to" id="to" value="0" disabled>
        
        <label>Currency:</label>
        <select name="to-currency" id="to-currency">
            <option value="USD">US Dollar</option>
            <option value="CAD">Canadian Dollar</option>
            <option value="EUR">Euro</option>
        </select> <br>
        <input id="convert-button" name="submit" type="submit" value="convert">
    </form>
    <?php
        $currency_array = array(
            "USD" => array("USD" => 1,"EUR" => 0.84, "CAD" => 0.73),
            "EUR" => array("EUR" => 1,"USD" => 1.19, "CAD" => 0.87),
            "CAD" => array("CAD" => 1,"USD" => 1.38, "EUR" => 1.15)
        );

        if(isset($_POST['submit'])) {
            $from_amount = $_POST['from'];
            $from_currency = $_POST['from-currency'];
            $to_currency = $_POST['to-currency'];

            $result = $from_amount * $currency_array[$from_currency][$to_currency];

            echo "<script>
                    document.getElementById('to').value = $result;
                    document.getElementById('from').value = $from_amount;
                  </script>";
        }
    ?>
</body>
</html>