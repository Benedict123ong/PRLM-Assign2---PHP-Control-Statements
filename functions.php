<?php include 'header.php'; ?>

<?php
//MULTIDIMENSIONAL ARRAY 
$armory_stock = [
    "Glock 17" => ["price" => 35000, "stock" => 10],
    "AR-15 Rifle" => ["price" => 75000, "stock" => 4],
    "Remington 870" => ["price" => 42000, "stock" => 8],
    "Colt M4 Carbine" => ["price" => 125000, "stock" => 4],
    "Sig Sauer P320" => ["price" => 45000, "stock" => 12],
    "Benelli M4" => ["price" => 165000, "stock" => 3],
    "Smith & Wesson MP9" => ["price" => 36000, "stock" => 9],
    "AK47" => ["price" => 98000, "stock" => 0],
    "Taurus G2C" => ["price" => 19000, "stock" => 15],
    "CZ Shadow 2" => ["price" => 122000, "stock" => 5], // extra product
    "FN SCAR 17S" => ["price" => 155500, "stock" => 1], // extra product
    "Kriss Vector" => ["price" => 189090, "stock" => 7] // extra product
];

//TAX RATE
$taxRate = 12;

//REORDER
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

//TOTAL VALUE
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

// TAX
function get_tax_due(float $price, int $qty, int $taxRate = 0): float {
    $total = $price * $qty;
    return $total * ($taxRate / 100);
}
?>

<div class="content">
    <h2>Inventory</h2>

    <table>
        <tr>
            <th>Product</th>
            <th>Stock</th>
            <th>Re-Order</th>
            <th>Total Value (₱)</th>
            <th>Tax Due (₱)</th>
        </tr>

        <?php foreach ($armory_stock as $product_name => $data): ?>
            <tr>
                <td><?= $product_name; ?></td>
                <td><?= $data["stock"]; ?></td>
                <td><?= get_reorder_message($data["stock"]); ?></td>
                <td>₱<?= number_format(get_total_value($data["price"], $data["stock"])); ?></td>
                <td>₱<?= number_format(get_tax_due($data["price"], $data["stock"], $taxRate), 2); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a class="button" href="index.php">Back to Home</a>
</div>
<?php include 'footer.php'; ?>
