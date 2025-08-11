<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            background: #F7F8FA;
            font-family: 'Figtree', sans-serif;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding-top: 24px;
        }
        .header {
            padding: 20px;
            padding-bottom: 12px;
            background: #fff;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        .profile-row {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }
        .avatar {
            width: 44px;
            height: 44px;
            border-radius: 22px;
            margin-right: 12px;
            object-fit: cover;
        }
        .greeting {
            font-size: 13px;
            color: #888;
        }
        .name {
            font-size: 17px;
            font-weight: bold;
            color: #222;
        }
        .profile-row .spacer {
            flex: 1;
        }
        .notif {
            font-size: 22px;
            color: #222;
            margin-right: 8px;
        }
        .search-row {
            display: flex;
            align-items: center;
            background: #F3F4F6;
            border-radius: 12px;
            margin-bottom: 16px;
            height: 40px;
            padding: 0 8px;
        }
        .search-icon, .tune-icon {
            font-size: 20px;
            color: #888;
        }
        .search-input {
            flex: 1;
            font-size: 15px;
            color: #222;
            background: transparent;
            border: none;
            margin: 0 8px;
            outline: none;
        }
        .tab-row {
            display: flex;
            margin-bottom: 8px;
        }
        .tab {
            padding: 7px 18px;
            border-radius: 16px;
            background: transparent;
            margin-right: 10px;
            color: #888;
            font-weight: 500;
            font-size: 15px;
            border: none;
            cursor: pointer;
        }
        .tab.active {
            background: #6C4DF4;
            color: #fff;
            font-weight: bold;
        }
        .section {
            margin-top: 18px;
            padding-left: 20px;
        }
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            padding-right: 20px;
        }
        .section-title {
            font-size: 17px;
            font-weight: bold;
            color: #222;
        }
        .see-all {
            color: #6C4DF4;
            font-weight: 500;
            font-size: 14px;
            text-decoration: none;
        }
        .card-list {
            display: flex;
            overflow-x: auto;
            padding-bottom: 8px;
        }
        .card {
            min-width: 200px;
            background: #fff;
            border-radius: 18px;
            margin-right: 16px;
            margin-bottom: 8px;
            padding: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .card-image {
            width: 100%;
            height: 100px;
            border-radius: 12px;
            margin-bottom: 8px;
            object-fit: cover;
        }
        .card-title {
            font-size: 15px;
            font-weight: bold;
            color: #222;
            margin-top: 8px;
        }
        .card-row {
            display: flex;
            align-items: center;
            margin-top: 4px;
            justify-content: space-between;
            width: 100%;
        }
        .card-price {
            font-size: 14px;
            color: #6C4DF4;
            font-weight: bold;
        }
        .card-rating-row {
            display: flex;
            align-items: center;
            margin-left: 8px;
        }
        .card-rating {
            font-size: 13px;
            color: #222;
            margin-left: 2px;
            font-weight: 500;
        }
        .star {
            color: #FFD700;
            font-size: 14px;
            margin-right: 2px;
        }
        @media (max-width: 600px) {
            .container {
                padding: 0;
            }
            .section {
                padding-left: 8px;
            }
            .section-header {
                padding-right: 8px;
            }
        }
    </style>
    <!-- Ionicons CDN for star and notification icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="profile-row">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="avatar" alt="Avatar">
                <div>
                    <div class="greeting">Good Evening!</div>
                    <div class="name">Isabella Chen</div>
                </div>
                <div class="spacer"></div>
                <span class="notif"><i class="far fa-bell"></i></span>
            </div>
            <form class="search-row" method="get" action="#">
                <span class="search-icon"><i class="fas fa-search"></i></span>
                <input type="text" class="search-input" placeholder="Food, Groceries, Drinks etc.">
                <span class="tune-icon"><i class="fas fa-sliders-h"></i></span>
            </form>
            <div class="tab-row">
                <button class="tab active">Popular</button>
                <button class="tab">Nearby</button>
                <button class="tab">Recommended</button>
            </div>
        </div>
        <!-- Anarta House Section -->
        <div class="section">
            <div class="section-header">
                <span class="section-title">Anarta House</span>
                <a href="#" class="see-all">See All</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <img src="{{ asset('assets/images/Anarta.png') }}" class="card-image" alt="Anarta1">
                    <div class="card-title">Koze Anarta H2-9</div>
                    <div class="card-row">
                        <span class="card-price">Rp 1.500.000/bulan</span>
                        <span class="card-rating-row"><span class="star"><i class="fas fa-star"></i></span><span class="card-rating">4.8</span></span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/images/Anarta2.png') }}" class="card-image" alt="Anarta2">
                    <div class="card-title">Koze Anarta H2-10</div>
                    <div class="card-row">
                        <span class="card-price">Rp 1.500.000/bulan</span>
                        <span class="card-rating-row"><span class="star"><i class="fas fa-star"></i></span><span class="card-rating">4.9</span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alesha House Section -->
        <div class="section">
            <div class="section-header">
                <span class="section-title">Alesha House</span>
                <a href="#" class="see-all">See All</a>
            </div>
            <div class="card-list">
                <div class="card">
                    <img src="{{ asset('assets/images/Alesha.png') }}" class="card-image" alt="Alesha1">
                    <div class="card-title">Koze Alesha Blue 1-1</div>
                    <div class="card-row">
                        <span class="card-price">1.600.000/bulan</span>
                        <span class="card-rating-row"><span class="star"><i class="fas fa-star"></i></span><span class="card-rating">4.7</span></span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/images/Alesha2.png') }}" class="card-image" alt="Alesha2">
                    <div class="card-title">Koze Alesha Blue 1-2</div>
                    <div class="card-row">
                        <span class="card-price">1.600.000/bulan</span>
                        <span class="card-rating-row"><span class="star"><i class="fas fa-star"></i></span><span class="card-rating">4.6</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
