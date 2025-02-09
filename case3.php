<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi Rakyat - UMKM Kopi Terbaik</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      height: 100%;
      background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
    }

    header {
      background: linear-gradient(to right, #1a1a1a, #2d2d2d);
      color: white;
      padding: 1.5rem 2rem;
      position: fixed;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .logo h1 {
      font-size: 2rem;
      font-weight: 600;
      letter-spacing: 2px;
      background: linear-gradient(45deg, #f90, #ff5e62);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    nav ul {
      list-style: none;
      display: flex;
    }

    nav ul li {
      margin-left: 2rem;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      font-size: 1.1rem;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #f90;
    }

    #hero {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                  url('https://source.unsplash.com/1600x900/?coffee') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
      position: relative;
      background-attachment: fixed;
    }

    .hero-content {
      max-width: 600px;
      padding: 40px;
      background: rgba(0, 0, 0, 0.6);
      border-radius: 15px;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .hero-content h2 {
      font-size: 3rem;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    #about {
      background: linear-gradient(135deg, #fff6e5 0%, #fff9f0 100%), url('https://source.unsplash.com/1600x900/?coffee-beans') no-repeat center center/cover;
      background-size: cover;
      padding: 6rem 0;
      position: relative;
      overflow: hidden;
    }

    #about::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23f90' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    #products {
      background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
      position: relative;
      padding: 6rem 0;
    }

    .product-cards {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .product-card {
      width: 300px;
      background: white;
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-10px);
    }

    .product-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 15px;
      margin-bottom: 1.5rem;
    }

    #contact {
      background: linear-gradient(135deg, #2d2d2d 0%, #1a1a1a 100%);
      color: white;
      padding: 6rem 0;
    }

    #contact-form {
      max-width: 600px;
      margin: 0 auto;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      backdrop-filter: blur(10px);
    }

    #contact-form input,
    #contact-form textarea {
      width: 100%;
      padding: 1rem;
      margin: 0.5rem 0;
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.9);
    }

    button {
      padding: 1rem 2rem;
      font-size: 1.1rem;
      background: linear-gradient(45deg, #f90, #ff5e62);
      color: white;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
    }

    footer {
      background: #1a1a1a;
      color: white;
      padding: 2rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <h1>Kopi Rakyat</h1>
      </div>
      <ul>
        <li><a href="#about">Tentang Kami</a></li>
        <li><a href="#products">Produk</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <section id="hero">
    <div class="hero-content">
      <h2>Selamat Datang di Kopi Rakyat</h2>
      <p>Kopi pilihan dengan rasa khas yang tak terlupakan, hanya di Kopi Rakyat.</p>
      <button id="order-now">Pesan Sekarang</button>
    </div>
  </section>

  <section id="about">
    <div class="section-content">
      <h2>Tentang Kami</h2>
      <p>Kopi Rakyat adalah UMKM yang mengolah kopi lokal dari petani terbaik di Indonesia. Kami berkomitmen untuk menyediakan kopi berkualitas tinggi yang diproses secara alami dan ramah lingkungan.</p>
    </div>
  </section>

  <section id="products">
    <div class="section-content">
      <h2>Produk Kami</h2>
      <div class="product-cards">
        <div class="product-card">
          <img src="Robusta.jpg" alt="Kopi Robusta">
          <h3>Kopi Robusta</h3>
          <p>Rasa kopi yang kuat dan penuh semangat. Cocok untuk Anda yang suka kopi dengan cita rasa yang lebih tajam.</p>
        </div>
        <div class="product-card">
          <img src="Arabika.jpg" alt="Kopi Arabika">
          <h3>Kopi Arabika</h3>
          <p>Kopi dengan rasa lebih lembut dan aroma yang menggoda, pilihan tepat untuk penyuka kopi premium.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="section-content">
      <h2>Kontak Kami</h2>
      <form id="contact-form">
        <input type="text" placeholder="Nama Anda" required>
        <input type="email" placeholder="Email Anda" required>
        <textarea placeholder="Pesan Anda" required></textarea>
        <button type="submit">Kirim Pesan</button>
      </form>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Kopi Rakyat | Semua hak dilindungi.</p>
  </footer>

  <script>
    document.getElementById('order-now').addEventListener('click', function() {
      alert('Terima kasih telah memilih Kopi Rakyat! Silakan pilih produk di halaman kami.');
    });

    document.getElementById('contact-form').addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Pesan Anda telah terkirim. Kami akan menghubungi Anda segera.');
    });
  </script>
</body>
</html>
