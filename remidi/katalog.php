<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookHaven - Toko Buku Online</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <nav>
        <a href="index.html" class="logo">Book<span>Haven</span></a>
        <ul class="nav-links">
          <li><a href="index.html">Beranda</a></li>
          <li><a href="katalog.php" class="active">Katalog</a></li>
          <li><a href="about.html">Tentang Kami</a></li>
          <li><a href="contact.html">Kontak</a></li>
        </ul>
      </nav>
    </header>

    <section class="hero">
      <div class="hero-content">
        <h1>Katalog Buku</h1>
        <p>Jelajahi ribuan koleksi buku terbaik dari berbagai genre</p>
      </div>
    </section>

    <section class="catalog-books">
      <div class="container"> 
        <h1 class="judul">____ Jelajahi koleksi yang kita miliki</h1>
        
        <div class="books-grid">
          <?php
            $query = "SELECT b.title, b.author, b.price, b.image, c.name AS category 
                    FROM books b
                    LEFT JOIN categories c ON b.category_id = c.category_id
                    ORDER BY b.book_id ASC";
            $result = pg_query($conn, $query);
            ?>

            <?php if (!$result): ?>
            <p>Gagal mengambil data buku</p>
            <?php else: ?>
            <?php while ($row = pg_fetch_assoc($result)): ?>
                <div class="book-card">
                <div class="book-cover">
                    <img src="img/buku.jpg" />
                </div>
                <div class="book-info">
                    <h3><?= htmlspecialchars($row['title']); ?></h3>
                    <p class="book-author"><?= htmlspecialchars($row['author']); ?></p>
                    <p class="book-category"><em><?= htmlspecialchars($row['category']); ?></em></p>
                    <div class="book-price">
                    <span class="price">Rp <?= number_format($row['price'], 0, ',', '.'); ?></span>
                    <button class="add-to-cart">+</button>
                    </div>
                </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>

            <?php pg_close($conn); ?>

        </div>
      </div>
    </section>

    <footer>
      <div class="footer-content">
        <div class="footer-section">
          <h3>Menu</h3>
          <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="katalog.html">Katalog</a></li>
            <li><a href="about.html">Tentang Kami</a></li>
            <li><a href="contact.html">Kontak</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Layanan</h3>
          <ul>
            <li><a href="#">Cara Pemesanan</a></li>
            <li><a href="#">Pengiriman</a></li>
            <li><a href="#">Pengembalian</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Hubungi Kami</h3>
          <ul>
            <li>info@bookhaven.com</li>
            <li>(021) 1234-5678</li>
            <li>Malang, Indonesia</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 BookHaven. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
