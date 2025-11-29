<?php include 'header.php'; ?>

<?php
// Array of firearms
$firearms = [
    ['model' => 'Glock 17', 'price' => 35000, 'details' => 'Reliable 9mm pistol used for self-defense and law enforcement.', 'stock' => 10],
    ['model' => 'AR-15 Rifle', 'price' => 75000, 'details' => 'Semi-automatic rifle with great accuracy and customization options.', 'stock' => 4],
    ['model' => 'Remington 870 Shotgun', 'price' => 42000, 'details' => 'Pump-action shotgun known for durability and versatility.', 'stock' => 8],
    ['model' => 'Colt M4 Carbine', 'price' => 125000, 'details' => 'A modern, lightweight 5.56mm rifle trusted for its stability, modular design, and strong field performance.', 'stock' => 4],
    ['model' => 'Sig Sauer P320', 'price' => 45000, 'details' => 'A striker fired handgun with a smooth trigger pull and customizable modular frame system.', 'stock' => 12],
    ['model' => 'Benelli M4 Tactical', 'price' => 165000, 'details' => 'A semi automatic combat shotgun known for its rugged build and proven reliability in harsh environments.', 'stock' => 3],
    ['model' => 'Smith & Wesson MP9', 'price' => 36000, 'details' => 'A well balanced 9mm pistol designed for comfort, precision, and everyday carry.', 'stock' => 9],
    ['model' => 'AK47', 'price' => 98000, 'details' => 'A legendary 7.62mm rifle recognized worldwide for its toughness and simple, dependable mechanism.', 'stock' => 0],
    ['model' => 'Taurus G2C', 'price' => 19000, 'details' => 'A compact, budget friendly handgun offering solid performance for personal defense.', 'stock' => 15]
];


$totalStock = 0;
foreach ($firearms as $gun) {
    $totalStock += $gun['stock']; 
}
?>

<div class="content">
    <h2>Available Firearms</h2>

    <table>
        <tr>
            <th>Model</th>
            <th>Price (₱)</th>
            <th>Specifications</th>
            <th>Stocks</th>
            <th>Status</th>
        </tr>
<!--Conditional Statements-->
        <?php foreach ($firearms as $gun) : ?>
        <tr class="<?php 
            if ($gun['stock'] == 0) {
                echo 'out-of-stock';
            } elseif ($gun['stock'] < 5) {
                echo 'low-stock';
            } elseif ($gun['stock'] > 6) {
                echo 'available';
            } ?>">

            <td><?= $gun['model']; ?></td>
            <td><?= number_format($gun['price']); ?></td>
            <td><?= $gun['details']; ?></td>
            <td><?= $gun['stock']; ?></td>
            <td>
                <?php 
                if ($gun['stock'] == 0) {
                    echo "Out of Stock";
                } elseif ($gun['stock'] < 5) {
                    echo "Low Stock";
                } else {
                    echo "Available";
                }
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="offer">
        <strong>10% OFF</strong> for people who have LTOPF.
    </div>

    <p><strong>Total Stocks Available:</strong> <?php echo $totalStock; ?> items</p>

    <a class="button" href="index.php">Back to Home</a>
</div>

<?php include 'footer.php'; ?>
