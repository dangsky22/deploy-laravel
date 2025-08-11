<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    <style>
        body {
            margin: 0;
            background: #f7f8fa;
            font-family: 'Figtree', sans-serif;
        }
        .layout {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 240px;
            background: #fff;
            box-shadow: 2px 0 8px rgba(0,0,0,0.04);
            padding: 24px 0 24px 0;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .sidebar .logo {
            text-align: center;
            margin-bottom: 32px;
            position: relative;
        }
        .sidebar .logo img {
            width: 40px;
        }
        .toggle-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            position: absolute;
            left: 16px;
            top: 16px;
            cursor: pointer;
            z-index: 1100;
        }

        .menu {
            flex: 1;
        }
        .menu-group {
            margin-bottom: 18px;
        }
        .menu-title {
            font-size: 13px;
            color: #888;
            margin: 10px 0 6px 24px;
        }
        .menu-item {
            display: flex;
            align-items: center;
            padding: 10px 24px;
            color: #222;
            font-size: 15px;
            border-radius: 8px;
            margin-bottom: 4px;
            text-decoration: none;
            transition: background 0.2s;
        }
        .menu-item.active, .menu-item:hover {
            background: #f3f4f6;
            font-weight: bold;
        }
        .menu-item i {
            margin-right: 12px;
            font-size: 17px;
        }
        .badge {
            background: #ffb400;
            color: #fff;
            font-size: 12px;
            border-radius: 8px;
            padding: 2px 8px;
            margin-left: auto;
        }

        .main {
            flex: 1;
            padding: 32px;
        }
        .header {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 24px;
        }
        .stats {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            margin-bottom: 24px;
        }
        .stat-card {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            flex: 1;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            min-width: 200px;
        }
        .stat-title {
            font-size: 15px;
            color: #888;
            margin-bottom: 8px;
        }
        .stat-value {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 4px;
        }
        .stat-desc {
            font-size: 13px;
            color: #888;
        }
        .stat-orange {
            border-bottom: 3px solid #ffb400;
        }
        .stat-blue {
            border-bottom: 3px solid #3b82f6;
        }
        .stat-red {
            border-bottom: 3px solid #ef4444;
        }
        .stat-green {
            border-bottom: 3px solid #22c55e;
        }

        .card, .table-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 24px;
            margin-bottom: 24px;
        }
        .card-title, .table-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .card-desc {
            font-size: 14px;
            color: #888;
            margin-bottom: 16px;
        }
        .chart {
            background: #f3f4f6;
            border-radius: 12px;
            height: 120px;
            margin-bottom: 16px;
            display: flex;
            align-items: flex-end;
            padding: 16px;
        }
        .chart-legend {
            display: flex;
            gap: 16px;
            margin-bottom: 8px;
        }
        .legend {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: #888;
        }
        .legend-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 6px;
        }
        .dot-green {
            background: #22c55e;
        }
        .dot-red {
            background: #ef4444;
        }
        .select {
            float: right;
            padding: 6px 12px;
            border-radius: 8px;
            border: 1px solid #eee;
            background: #fff;
            color: #888;
            font-size: 14px;
        }
        .table-search {
            float: right;
            margin-bottom: 12px;
            padding: 6px 12px;
            border-radius: 8px;
            border: 1px solid #eee;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        th, td {
            padding: 10px 8px;
            text-align: left;
        }
        th {
            background: #f3f4f6;
            color: #888;
            font-weight: 500;
        }
        tr {
            border-bottom: 1px solid #f3f4f6;
        }
        .unit {
            font-weight: bold;
        }
        .owner {
            background: #f3f4f6;
            border-radius: 8px;
            padding: 2px 8px;
            font-size: 13px;
        }
        .location {
            color: #3b82f6;
            font-weight: 500;
        }
        .hunian {
            font-weight: bold;
        }
        .hunian-red {
            color: #ef4444;
        }
        .hunian-green {
            color: #22c55e;
        }
        .hunian-yellow {
            color: #ffb400;
        }
        .income {
            color: #22c55e;
            font-weight: bold;
        }
        .net-income {
            color: #3b82f6;
            font-weight: bold;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .layout {
                flex-direction: column;
            }
            .sidebar {
                position: fixed;
                top: 0;
                left: -260px;
                height: 100vh;
                z-index: 1000;
                transition: left 0.3s ease;
            }
            .sidebar.sidebar-open {
                left: 0;
            }
            .toggle-btn {
                display: block;
            }
            .main {
                padding: 80px 16px 16px 16px;
            }
        }
    </style>
</head>
<body>
<div class="layout">
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
            <img src="{{ asset('assets/images/kost.png') }}" alt="Logo">
        </div>
        <div class="menu">
            <a href="#" class="menu-item active"><i class="fas fa-home"></i> Dashboard</a>
            <a href="#" class="menu-item"><i class="fas fa-book"></i> Log Penghuni</a>
            <a href="#" class="menu-item"><i class="fas fa-users"></i> Data Penghuni</a>
            <a href="#" class="menu-item"><i class="fas fa-handshake"></i> Mitra</a>
            <a href="#" class="menu-item"><i class="fas fa-ticket-alt"></i> Ticketing <span class="badge">2</span></a>
            <div class="menu-group">
                <div class="menu-title">Manajemen Kos</div>
                <a href="#" class="menu-item"><i class="fas fa-bed"></i> Kamar</a>
                <a href="#" class="menu-item"><i class="fas fa-th-large"></i> Tipe Kamar</a>
                <a href="#" class="menu-item"><i class="fas fa-building"></i> Units</a>
            </div>
            <div class="menu-group">
                <div class="menu-title">SuperAdmin</div>
                <a href="#" class="menu-item"><i class="fas fa-user-shield"></i> Users</a>
            </div>
            <div class="menu-group">
                <div class="menu-title">Voucher</div>
                <a href="#" class="menu-item"><i class="fas fa-ticket-alt"></i> Validasi Voucher</a>
            </div>
            <div class="menu-group">
                <div class="menu-title">Manajemen Voucher</div>
                <a href="#" class="menu-item"><i class="fas fa-gift"></i> Vouchers</a>
            </div>
        </div>
    </div>
    <div class="main" onclick="closeSidebarOnOutsideClick(event)">
        <div class="header">Dashboard</div>
        <div class="stats">
            <div class="stat-card stat-orange">
                <div class="stat-title">Total Kos</div>
                <div class="stat-value">87</div>
                <div class="stat-desc">Unit kos terdaftar <i class="fas fa-home"></i></div>
            </div>
            <div class="stat-card stat-blue">
                <div class="stat-title">Total Kamar</div>
                <div class="stat-value">613</div>
                <div class="stat-desc">Kamar tersedia <i class="fas fa-th-large"></i></div>
            </div>
            <div class="stat-card stat-red">
                <div class="stat-title">Tingkat Hunian</div>
                <div class="stat-value">33.6%</div>
                <div class="stat-desc">206 dari 613 kamar terisi <i class="fas fa-chart-line"></i></div>
            </div>
            <div class="stat-card stat-green">
                <div class="stat-title">Revenue Aktual</div>
                <div class="stat-value">Rp 1.600.000</div>
                <div class="stat-desc">Dari 60.725.000 potensial <i class="fas fa-money-bill-wave"></i></div>
            </div>
        </div>

        <div class="card">
            <div class="card-title">Analisis Keuangan</div>
            <div class="card-desc">Perbandingan pemasukan dan pengeluaran</div>
            <select class="select">
                <option>6 Bulan</option>
                <option>12 Bulan</option>
            </select>
            <div class="chart-legend">
                <span class="legend"><span class="legend-dot dot-green"></span>Pemasukan</span>
                <span class="legend"><span class="legend-dot dot-red"></span>Pengeluaran</span>
            </div>
            <div class="chart">
                <svg width="100%" height="80" viewBox="0 0 400 80">
                    <polyline points="0,60 80,40 160,50 240,30 320,40 400,35" fill="none" stroke="#22c55e" stroke-width="3" />
                    <polyline points="0,70 80,60 160,65 240,50 320,60 400,55" fill="none" stroke="#ef4444" stroke-width="3" />
                </svg>
            </div>
        </div>

        <div class="table-card">
            <div class="table-title">Performance Unit Kos</div>
            <input type="text" class="table-search" placeholder="Search">
            <table>
                <thead>
                <tr>
                    <th>Nama Unit</th>
                    <th>Pemilik</th>
                    <th>Lokasi</th>
                    <th>Total Kamar</th>
                    <th>Terisi</th>
                    <th>Kosong</th>
                    <th>Hunian</th>
                    <th>Pemasukan</th>
                    <th>Net Income</th>
                </tr>
                </thead>
                <tbody>
                <!-- ... table content ... -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('sidebar-open');
    }

    function closeSidebarOnOutsideClick(event) {
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.querySelector('.toggle-btn');
        if (!sidebar.contains(event.target) && !toggleBtn.contains(event.target)) {
            sidebar.classList.remove('sidebar-open');
        }
    }
</script>
</body>
</html>
