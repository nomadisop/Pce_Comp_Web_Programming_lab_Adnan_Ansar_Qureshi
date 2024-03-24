<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .payment-form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


<div id="displayValue"></div>
    <div class="container">
        <h1>Payment Page</h1>
        <table><tr><td>Total Price:</td><td><?php
echo $_SESSION['total'];
?></td></tr></table>
        
        <div class="payment-form">
            <form action="pays.php" method="POST">
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" required>

                <label for="expiry">Expiry Date:</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YYYY" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" maxlength="3" required>

                <label for="name">Cardholder's Name:</label>
                <input type="text" id="name" name="name" required>

                <button type="submit">Pay Now</button>
            </form>
        </div>
    </div>
</body>
</html>
