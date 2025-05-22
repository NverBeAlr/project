<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương thức thanh toán</title>
</head>
<body>
    <?php
        include_once "../../connection/open.php";
        $sql = "SELECT PAY_ID, NAME FROM payment_methods";
        $result = mysqli_query($connection, $sql);
    ?>
    <form method="POST" action="checkOut.php">
        <label for="pay_id">Phương thức thanh toán</label>
        <select name="pay_id" id="pay_id" required>
            <?php 
            while ($row = mysqli_fetch_assoc($result)) { 
            ?>
                <option value="<?php echo $row['PAY_ID']; ?>">
                    <?php echo htmlspecialchars($row['NAME']); ?>
                </option>
            <?php
             }
             ?>
        </select>
        <button type="submit">Checkout</button>
    </form>
    <?php include_once "../../connection/close.php"; ?>
</body>
</html>