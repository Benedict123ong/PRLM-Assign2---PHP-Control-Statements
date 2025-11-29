<?php include 'header.php'; ?>

<!--variables-->
<?php
$storeName = "Ratatat Armory";
$companyName = "Ratatat Enterprises";
$establishedYear = 2020;
$yearOpened = 2023;
?>

<div class="hero">
    <h1>Welcome to <?= $storeName; ?></h1>
    <p class="tagline">Trusted Firearms for Shooters, Collectors, and Professionals</p>
</div>

<main class="container">
    <section class="welcome-box">
        <h2>About <?= $storeName; ?></h2>
        <p>
            We’re a team of passionate shooters and firearms enthusiasts dedicated to bringing quality gear to our community. At <?= $storeName; ?>, we don’t just sell firearms—we provide products you can rely on, whether you’re at the range, in competition, or securing your home.
        </p>
        <p>
            Our company, <?= $companyName; ?>, has been serving local and visiting shooters since <?php echo $establishedYear; ?>. In <?php echo $yearOpened; ?>, we proudly opened the first official <?php echo $storeName; ?> Store in the Philippines, a step that reinforced our commitment to offering only the best brands and equipment.
        </p>
        <p>
            Our boutique features top international firearms, and a selection of accessories to suit every shooter’s needs. Our staff is always ready to guide you, answer your questions, and help you find exactly what you’re looking for.
        </p>
        <p>
            Come visit <?php echo $storeName; ?>—where experience meets quality, and every firearm has a story.
        </p>
    </section>

    <section class="featured-section">
        <h2><br>Check Out Our Firearms</h2>
        <p>Browse our collection of rifles, handguns, and shotguns. We’ve got something for beginners, enthusiasts, and serious competitors alike.</p>
        <a class="button" href="products.php">See Our Products</a>
        
    </section>
</main>

<?php include 'footer.php'; ?>
