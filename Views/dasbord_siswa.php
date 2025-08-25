<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPPS-TP Dashboard Siswa</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, sans-serif;
    }

    body {
      display: flex;
      background: #f5f6fa;
      color: #333;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      background: #1e2b38;
      color: #fff;
      min-height: 100vh;
      padding: 20px 10px;
    }

    .sidebar .profile {
      text-align: center;
      margin-bottom: 20px;
    }

    .sidebar .profile img {
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .sidebar h3 {
      margin-bottom: 5px;
    }

    .sidebar p {
      font-size: 12px;
      color: #bbb;
    }

    .sidebar .menu {
      list-style: none;
    }

    .sidebar .menu li {
      margin: 12px 0;
    }

    .sidebar .menu a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 8px 12px;
      border-radius: 6px;
    }

    /* Main */
    .main {
      flex: 1;
      padding: 20px;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #3498db;
      padding: 12px 20px;
      border-radius: 6px;
      color: #fff;
    }

    .date {
      margin: 15px 0;
      color: #555;
      font-size: 14px;
    }

    .cards {
      display: grid;
      gap: 15px;
      margin-bottom: 20px;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .card h4 {
      font-size: 14px;
      color: #777;
    }

    .card p {
      font-size: 18px;
      font-weight: bold;
      margin-top: 8px;
    }

    .card.blue { border-left: 6px solid #3498db; }
    .card.red { border-left: 6px solid #e74c3c; }
    .card.green { border-left: 6px solid #2ecc71; }
    .card.orange { border-left: 6px solid #f39c12; }
    .card.navy { border-left: 6px solid #34495e; }
    .card.gray { border-left: 6px solid #7f8c8d; }

    .footer-info {
      background: #00aaff;
      color: #fff;
      padding: 15px;
      border-radius: 6px;
      font-size: 13px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="profile">
      <img src="https://via.placeholder.com/80" alt="Siswa">
      <h3>Rizky Pratama</h3>
      <p>👨‍🎓 Kelas : XII RPL 1</p>
    </div>
    <ul class="menu">
      <li><a href="#">🏠 Dashboard</a></li>
      <li><a href="#">💰 Tagihan SPP</a></li>
      <li><a href="#">📜 Riwayat Pembayaran</a></li>
      <li><a href="#">👤 Profil</a></li>
      <li><a href="#">🚪 Keluar</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="navbar">
      <h2>📊 Dashboard Siswa</h2>
      <div class="user">Rizky Pratama ⏷</div>
    </div>

    <div class="date">Senin, 21 Oktober 2019 | 17:10:07 | Selamat sore, Rizky</div>

    <!-- Info Cards -->
    <div class="cards">
      <div class="card blue">
        <h4>Nama Sekolah</h4>
        <p>SMK SANGKURIANG 1 CIMAHI</p>
      </div>
      <div class="card red">
        <h4>Total Tagihan SPP</h4>
        <!-- JIKA TIDAK ADA TAGIHAN MAKA 0 -->
        <p>Rp. 1.200.000,00</p>
      </div>
      <div class="card green">
        <h4>Total Pembayaran</h4>
        <p>Rp. 800.000,00</p>
      </div>
      <div class="card orange">
        <h4>Sisa Tagihan</h4>
        <p>Rp. 400.000,00</p>
      </div>
      
      <div class="card gray">
        <h4>Status</h4>
        <p>Belum Lunas</p>
      </div>
    </div>
    <div class="card gray">
        <h4>SPP Yang Belum Dibayar</h4>
        <p>Rp. 25.000,00</p>
      </div>

    <!-- Footer Info -->
    <div class="footer-info">
      Ini adalah halaman Dashboard Siswa. Di sini Anda dapat melihat informasi tagihan SPP, 
      pembayaran yang sudah dilakukan, saldo tabungan, dan status pembayaran. Silakan gunakan 
      menu di sebelah kiri untuk melakukan pembayaran atau melihat riwayat transaksi Anda.
    </div>
  </div>
</body>
</html>