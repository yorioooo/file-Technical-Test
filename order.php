<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Produk - Kopi Rakyat</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f7f7f7;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .order-container {
      background: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .order-container h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .order-container form {
      display: flex;
      flex-direction: column;
    }

    .order-container input,
    .order-container select,
    .order-container button {
      margin: 0.5rem 0;
      padding: 1rem;
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 1rem;
      width: 100%;
    }

    .order-container button {
      background: linear-gradient(45deg, #f90, #ff5e62);
      color: white;
      border: none;
      cursor: pointer;
      transition: transform 0.3s;
    }

    .order-container button:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="order-container">
    <h2>Pesan Produk</h2>
    <form action="process_order.php" method="POST">
      <select name="product" required>
        <option value="">Pilih Produk</option>
        <option value="Kopi Robusta">Kopi Robusta</option>
        <option value="Kopi Arabika">Kopi Arabika</option>
      </select>
      <input type="text" name="name" placeholder="Nama Anda" required>
      <input type="text" name="address" placeholder="Alamat Pengiriman" required>
      <input type="email" name="email" placeholder="Email Anda" required>
      <button type="submit">Pesan Sekarang</button>
    </form>
  </div>
</body>
</html>
