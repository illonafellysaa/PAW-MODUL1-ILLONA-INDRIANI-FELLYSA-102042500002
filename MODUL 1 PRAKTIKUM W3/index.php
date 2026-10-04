<?php
$produk = [
    [
        "nama" => "Laptop ASUS Vivobook",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 5
    ],
    [
        "nama" => "iPhone 18",
        "kategori" => "Smartphone",
        "harga" => 60000000,
        "stok" => 3
    ],
    [
        "nama" => "Samsung Galaxy A55",
        "kategori" => "Smartphone",
        "harga" => 6500000,
        "stok" => 7
    ],
    [
        "nama" => "Headphone Sony WH-1000XM5",
        "kategori" => "Audio",
        "harga" => 5500000,
        "stok" => 0
    ],
    [
        "nama" => "Mouse Logitech G Pro",
        "kategori" => "Aksesoris",
        "harga" => 1500000,
        "stok" => 4
    ],
    [
    "nama" => "Kabel USB Type-C",
    "kategori" => "Aksesoris",
    "harga" => 75000,
    "stok" => 10
    ],
];

$totalProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lona Store</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="navbar">
        <div class="container nav-content">

            <div class="logo">
                Lona<span>Store</span>
            </div>

            <nav>
                <a href="#">Home</a>
                <a href="#produk">Products</a>
                <a href="#about">About</a>
            </nav>

        </div>
    </header>

    <section class="hero">
        <div class="container hero-content">

            <div class="hero-text">
                <p class="small-title">LONA STORE</p>

                <h1>Simple Tech Store.</h1>

                <p>
                    Temukan berbagai perangkat dan aksesoris
                    teknologi untuk kebutuhanmu.
                </p>

                <a href="#produk" class="hero-button">
                    Lihat Produk
                </a>
            </div>

        </div>
    </section>

    <section class="product-section" id="produk">

        <div class="container">

            <div class="section-header">

                <div>
                    <p class="section-label">OUR PRODUCTS</p>
                    <h2>Katalog Produk</h2>
                </div>

                <div class="total-product">
                    Total Produk:
                    <strong><?php echo $totalProduk; ?></strong>
                </div>

            </div>

            <div class="product-grid">

                <?php foreach ($produk as $item): ?>

                    <?php

                    if ($item["harga"] >= 1000000) {

                        $diskon = 10;

                        $hargaDiskon = $item["harga"] - ($item["harga"] * $diskon / 100);

                    } else {

                        $diskon = 0;
                        $hargaDiskon = $item["harga"];
                    }

                    if ($item["stok"] > 0) {
                        $status = "Tersedia";
                        $statusClass = "tersedia";
                    } else {
                        $status = "Stok Habis";
                        $statusClass = "habis";
                    }

                    ?>

                    <div class="product-card">

                        <p class="product-category">
                            <?php echo $item["kategori"]; ?>

                            <?php if ($diskon > 0): ?>
                                <span class="discount-badge">
                                    DISKON 10%
                                </span>
                            <?php endif; ?>

                        </p>

                        <h3>
                            <?php echo $item["nama"]; ?>
                        </h3>

                        <div class="price">

                            <?php if ($diskon > 0): ?>

                                <p class="normal-price">
                                    Rp<?php echo number_format($item["harga"], 0, ',', '.'); ?>
                                </p>

                                <p class="discount-text">
                                    Diskon <?php echo $diskon; ?>%
                                </p>

                                <p class="final-price">
                                    Rp<?php echo number_format($hargaDiskon, 0, ',', '.'); ?>
                                </p>

                            <?php else: ?>

                                <p class="final-price">
                                    Rp<?php echo number_format($item["harga"], 0, ',', '.'); ?>
                                </p>

                            <?php endif; ?>

                        </div>

                        <div class="stock-info">

                            <span>
                                Stok:
                                <strong><?php echo $item["stok"]; ?></strong>
                            </span>

                            <span class="status <?php echo $statusClass; ?>">
                                <?php echo $status; ?>
                            </span>

                        </div>

                        <?php if ($item["stok"] > 0): ?>

                            <button class="buy-button">
                                Beli Sekarang
                            </button>

                        <?php else: ?>

                            <button class="buy-button disabled" disabled>
                                Stok Habis
                            </button>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <section class="about" id="about">

        <div class="container">

            <p class="section-label">ABOUT LONA STORE</p>

            <h2>
                Perangkat teknologi untuk kebutuhan sehari-hari.
            </h2>

            <p>
                Lona Store menyediakan berbagai perangkat dan aksesoris teknologi dengan harga yang terjangkau.
            </p>

        </div>

    </section>

    <footer>
        <div class="container">
            <p>
                &copy; 2026 Lona Store. All Rights Reserved.
            </p>
        </div>
    </footer>

</body>

</html>