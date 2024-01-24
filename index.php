<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Total Price</title>
</head>
<body>

<?php
// Predefined product details
$productName1 = "Ice Cream";
$pricePerUnit1 = 2;

$productName2 = "Apple";
$pricePerUnit2 = 5;

// Initialize product counts
$productCount1 = 0;
$productCount2 = 0;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "productCount1" key exists in the $_POST array
    if (isset($_POST["productCount1"])) {
        // Retrieve count from the form
        $productCount1 = (int)$_POST["productCount1"];
    }

    // Check if the "productCount2" key exists in the $_POST array
    if (isset($_POST["productCount2"])) {
        // Retrieve count from the form
        $productCount2 = (int)$_POST["productCount2"];
    }
}

// Calculate the total prices
$totalPrice1 = $pricePerUnit1 * $productCount1;
$totalPrice2 = $pricePerUnit2 * $productCount2;

// Calculate the final total
$finalTotalPrice = $totalPrice1 + $totalPrice2;
?>

<!-- HTML form for user input -->
<form method="post" action="">
    <table border="2" width="600px">
        <tr lang="si">
            <th>Product භාණ්ඩය </th>
            <th>Unit Price </th>
            <th>Count Product ගණන</th>
            <th>Added දමන්න</th>
            <th>Added Total ගන්නා ගණන</th>
            <th>Total Price ඒකතුව</th>
        </tr>
        <tr>
            <td><?php echo $productName1; ?></td>
            <td><?php echo "Rs ".$pricePerUnit1; ?></td>
            <td><input type="number" name="productCount1" value="<?php echo $productCount1; ?>"></td>
            <td><input type="submit" name="calculatePrice1" value="Add"></td>
            <td><?php echo $productCount1; ?></td>
            <td><?php echo "Rs ".$totalPrice1; ?></td>
        </tr>
        <tr>
            <td><?php echo $productName2; ?></td>
             <td><?php echo "Rs ".$pricePerUnit2; ?></td>
            <td><input type="number" name="productCount2" value="<?php echo $productCount2; ?>"></td>
            <td><input type="submit" name="calculatePrice2" value="Add"></td>
            <td><?php echo $productCount2; ?></td>
            <td><?php echo "Rs ".$totalPrice2; ?></td>
        </tr>
        <tr>
            <td colspan="5">Final Total</td>
            <td bgcolor="red"><?php echo "Rs ". $finalTotalPrice; ?></td>
        </tr>
    </table>
    <br>
    <button type="button" onclick="printBill()">Print Bill</button>

    <script>
        function printBill() {
            window.print();
        }
    </script>
</form>

</body>
</html>
