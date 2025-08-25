<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPPS-TP Dashboard Petugas</title>
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
      transition: background 0.2s;
    }

    .sidebar .menu a:hover {
      background: #324559;
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
    .card.purple { border-left: 6px solid #9b59b6; }
    .card.teal { border-left: 6px solid #1abc9c; }

    .footer-info {
      background: #3498db;
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
      <img src="https://via.placeholder.com/80" alt="Petugas">
      <h3>PETUGAS</h3>
      <p>💼 Tahun Ajaran : 2019/2020</p>
    </div>
    <ul class="menu">
      <li><a href="#">🏠 Dashboard</a></li>
      <li><a href="#">👨‍🎓 Data Siswa</a></li>
      <li><a href="#">💰 Entri Pembayaran</a></li>
      <li><a href="#">📑 Laporan Pembayaran</a></li>
      <li><a href="#">🚪 Keluar</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="navbar">
      <h2>📊 Dashboard Petugas</h2>
      <div class="user">PETUGAS ⏷</div>
    </div>

    <div class="date">Senin, 21 Oktober 2019 | 17:10:07 | Selamat sore, PETUGAS</div>

    <!-- Info Cards -->
    <div class="cards">
      <div class="card blue">
        <h4>Total Transaksi Hari Ini</h4>
        <p>25</p>
      </div>
      <div class="card red">
        <h4>Nominal Transaksi Hari Ini</h4>
        <p>Rp. 12.500.000</p>
      </div>
      <div class="card green">
        <h4>Total Transaksi Bulan Ini</h4>
        <p>480</p>
      </div>
      <div class="card orange">
        <h4>Nominal Transaksi Bulan Ini</h4>
        <p>Rp. 240.000.000</p>
      </div>
      <div class="card purple">
        <h4>Total Siswa Sudah Bayar</h4>
        <p>350</p>
      </div>
      <div class="card teal">
        <h4>Total Siswa Belum Bayar</h4>
        <p>130</p>
      </div>
    </div>

    <!-- Footer Info -->
    <div class="footer-info">
      Ini adalah halaman Dashboard untuk <strong>Petugas</strong> yang menampilkan ringkasan transaksi 
      pembayaran sekolah. Dari halaman ini, petugas dapat mengelola data siswa, melakukan entri 
      pembayaran, serta mencetak laporan transaksi. Pastikan data pembayaran dicatat dengan benar 
      dan sampaikan ke administrator jika menemukan kendala. Terima kasih atas kerja keras Anda! 
    </div>
  </div>
</body>
</html>