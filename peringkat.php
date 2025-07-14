<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SinBarTIK - Website untuk Mempelajari Informatika</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --sinbar-blue: #4A90E2;
            --sinbar-light-blue: #E3F2FD;
            --sinbar-dark-blue: #2171B5;
            --sinbar-black: #333333;
            --sinbar-gray: #666666;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .home-hero {
            background: linear-gradient(135deg,rgb(255, 255, 255) 100%);
            padding: 80px 0;
            min-height: 500px;
            display: flex;
            align-items: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 500;
            color: var(--sinbar-blue);
            margin-bottom: 20px;
            line-height: 1.2;
            padding-left: 20px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: var(--sinbar-black);
            background-color: var(--sinbar-light-blue);
            padding: 12px 24px;
            border-radius: 25px;
            display: inline-block;
            margin-bottom: 30px;
        }

        .hero-mascot {
            width: 300px;
            height: 300px;
            background: var(--sinbar-blue);
            border-radius: 50%;
            position: relative;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 40px rgba(74, 144, 226, 0.3);
        }

        .peringkat-section {
            padding: 80px 0;
            background: white;
        }

        .peringkat-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--sinbar-black);
            text-align: center;
            margin-bottom: 50px;
            letter-spacing: 2px;
        }

        .peringkat-container {
            background: var(--sinbar-light-blue);
            border-radius: 20px;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .peringkat-container2 {
            background: var(--sinbar-light-blue);
            border-radius: 20px;
            padding: 10px;
            position: relative;
            overflow: hidden;
            margin-top: 30px;
            height: 70px;
        }

        .podium-container {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            margin-bottom: 40px;
            height: 250px;
            gap: 10px;
        }

        .podium-container2 {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            margin-bottom: 40px;
            height: 15px;
            gap: 10px;
            padding-top: 50px;
        }

        .podium-step {
            min-width: 100px;
            max-width: 150px;
            flex: 1;
            background: var(--sinbar-blue);
            border-radius: 10px 10px 0 0;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 10px 30px rgba(74, 144, 226, 0.3);
            text-align: center;
            padding: 10px 5px;
            word-wrap: break-word;
            hyphens: auto;
        }

        .podium-step.second {
            height: 140px;
        }

        .podium-step.first {
            height: 180px;
            background: #FFD700;
            color: #333;
        }

        .podium-step.third {
            height: 100px;
        }

        .podium-step::before {
            content: '';
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 35px;
            height: 35px;
            background: var(--sinbar-blue);
            border-radius: 50%;
            border: 3px solid white;
        }

        .podium-step.first::before {
            background: #FFD700;
        }

        .podium-step::after {
            position: absolute;
            top: -18px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 14px;
            font-weight: bold;
            color: white;
        }

        .podium-step.first::after {
            content: '1';
            color: #333;
        }

        .podium-step.second::after {
            content: '2';
        }

        .podium-step.third::after {
            content: '3';
        }

        .peringkat-info {
            text-align: center;
        }

        .peringkat-subtitle {
            font-size: 1.1rem;
            color: var(--sinbar-black);
            margin-bottom: 20px;
            font-weight: 600;
        }

        .peringkat-button {
            background: var(--sinbar-blue);
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .peringkat-button:hover {
            background: var(--sinbar-dark-blue);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(74, 144, 226, 0.4);
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-mascot {
                width: 250px;
                height: 250px;
            }

            .floating-icons {
                display: none;
            }

            .peringkat-title {
                font-size: 2rem;
            }

            .podium-container {
                height: 200px;
                gap: 5px;
            }

            .podium-step {
                min-width: 80px;
                max-width: 120px;
                font-size: 14px;
                padding: 8px 3px;
            }

            .podium-step.second {
                height: 110px;
            }

            .podium-step.first {
                height: 140px;
            }

            .podium-step.third {
                height: 80px;
            }

            .podium-step::before {
                width: 30px;
                height: 30px;
                top: -20px;
            }

            .podium-step::after {
                top: -14px;
                font-size: 12px;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-mascot {
                width: 200px;
                height: 200px;
            }

            .peringkat-container {
                padding: 20px;
            }

            .podium-container {
                height: 180px;
                gap: 3px;
            }

            .podium-step {
                min-width: 70px;
                max-width: 100px;
                font-size: 12px;
                padding: 5px 2px;
            }

            .podium-step.second {
                height: 90px;
            }

            .podium-step.first {
                height: 120px;
            }

            .podium-step.third {
                height: 60px;
            }

            .podium-step::before {
                width: 25px;
                height: 25px;
                top: -18px;
            }

            .podium-step::after {
                top: -12px;
                font-size: 11px;
            }
        }

        @media (max-width: 480px) {
            .podium-step {
                min-width: 60px;
                max-width: 80px;
                font-size: 11px;
            }
        }

        .table-container {
            background-color: #e3f2fd; 
            border-radius: 8px;
            margin: 20px auto;
            max-width: 1100px;
            margin-top: -45px;
        }
        
        .table thead th {
            background-color: #e3f2fd;
            color: #333;
            font-weight: 600;
            border: none;
            padding: 15px 12px;
        }
        
        .table tbody td {
            background-color: #ffffff;
            border: none;
            padding: 15px 12px;
            vertical-align: middle;
        }
        
        .table tbody tr {
            border-bottom: none;
        }
        
        .table th:first-child,
        .table td:first-child {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        
        .table th:last-child,
        .table td:last-child {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        
        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }
        
        @media (max-width: 768px) {
            .table-container {
                padding: 10px;
                margin: 10px;
            }
            
            .table thead th,
            .table tbody td {
                padding: 8px 6px;
                font-size: 14px;
            }
        }

        .banner-container {
            background: linear-gradient(135deg, #4a90e2 0%, #2c5aa0 100%);
            min-height: 400px;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            margin-bottom: 50px;
        }

        .banner-content {
            padding: 60px 0;
            position: relative;
            z-index: 2;
            margin-top: 10px;
        }

        .book-container {
            position: relative;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
            text-align: center;
        }

        .book-image {
            width: 100%;
            height: auto;
            max-height: 180px;
            object-fit: contain;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.2));
        }

        .main-text {
            color: white;
            font-weight: bold;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .sub-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .btn-custom {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .btn-custom:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            transform: translateY(-2px);
        }

        .mascot-container {
            position: relative;
            text-align: center;
        }

        .mascot {
            width: 200px;
            height: 200px;
            background: #87ceeb;
            border-radius: 50%;
            position: relative;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .mascot::before {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background: white;
            border-radius: 50%;
            top: 60px;
            left: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .mascot::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background: white;
            border-radius: 50%;
            top: 60px;
            right: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .mascot-smile {
            position: absolute;
            width: 80px;
            height: 40px;
            background: #333;
            border-radius: 0 0 80px 80px;
            top: 110px;
            left: 50%;
            transform: translateX(-50%);
        }

        .mascot-teeth {
            position: absolute;
            width: 60px;
            height: 20px;
            background: white;
            border-radius: 0 0 60px 60px;
            top: 5px;
            left: 50%;
            transform: translateX(-50%);
        }

        .lightbulb {
            position: absolute;
            top: -20px;
            right: -20px;
            width: 40px;
            height: 50px;
            background: #f1c40f;
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            animation: pulse 2s infinite;
        }

        .lightbulb::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 8px;
            background: #95a5a6;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 4px;
        }

        .book-icon {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 45px;
            background: #e67e22;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .book-icon::before {
            content: '';
            position: absolute;
            width: 50px;
            height: 35px;
            background: white;
            top: 5px;
            left: 5px;
            border-radius: 2px;
        }

        .decorative-circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .circle-1 {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .circle-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .circle-3 {
            width: 80px;
            height: 80px;
            top: 80%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @media (max-width: 768px) {
            .banner-content {
                padding: 40px 0;
            }

            .main-text {
                font-size: 1.5rem;
            }

            .sub-text {
                font-size: 1rem;
            }

            .mascot {
                width: 150px;
                height: 150px;
            }

            .book-container {
                max-width: 150px;
            }

            .book-image {
                max-height: 150px;
            }
        }

        @media (max-width: 576px) {
            .banner-content {
                padding: 30px 0;
            }

            .main-text {
                font-size: 1.3rem;
            }

            .mascot {
                width: 120px;
                height: 120px;
            }

            .lightbulb {
                width: 30px;
                height: 40px;
            }
        }
    </style>
</head>

<body>

    <?php include './components/navbar.php'; ?>
    <!-- Hero Section -->
    <div class="home-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h1 class="hero-title">Peringkat Murid SinBarTIK</h1>
                    <p class="hero-subtitle">Peringkat SinBar berdasarkan Skor Sinbar</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="d-flex justify-content-center">
                        <div style="width: fit-content;">
                            <img class="home-hero-image-home-center" src="./assets/content/maskot-peringkat.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Peringkat Section -->
    <div class="peringkat-section">
        <div class="container">
            <h2 class="peringkat-title">PERINGKAT SINBAR</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="peringkat-container">
                        <div class="podium-container">
                            <div class="podium-step second">Muhammad Rafli Al-Farisi</div>
                            <div class="podium-step first">Izan</div>
                            <div class="podium-step third">Cipunkkkk Apalah</div>
                        </div>
                        <div class="peringkat-info">
                            <p class="peringkat-subtitle">PERINGKAT SINBAR SEMESTER IN BERDASARKAN TOTAL SKOR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%;">No</th>
                            <th scope="col" style="width: 40%;">Nama</th>
                            <th scope="col" style="width: 20%;">Kelas</th>
                            <th scope="col" style="width: 17.5%;">Rata-Rata Skor</th>
                            <th scope="col" style="width: 17.5%;">Total Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Adinda Ryka Mayandra</td>
                            <td>X RPL B</td>
                            <td>91.5</td>
                            <td>549</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ainiya Naufalia Riskyani</td>
                            <td>X RPL B</td>
                            <td>91.2</td>
                            <td>547</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Aji Surya Putra Utama</td>
                            <td>X RPL B</td>
                            <td>90.8</td>
                            <td>545</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alfa Dimas Sastranegara</td>
                            <td>X RPL B</td>
                            <td>90.5</td>
                            <td>543</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Aqela Fakhrunnisa</td>
                            <td>X RPL B</td>
                            <td>90.2</td>
                            <td>541</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Auni Hamizan</td>
                            <td>X RPL B</td>
                            <td>89.8</td>
                            <td>539</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Ayu Nur Hamida</td>
                            <td>X RPL B</td>
                            <td>89.5</td>
                            <td>537</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Bima Satriyo Wicaksono</td>
                            <td>X RPL B</td>
                            <td>89.2</td>
                            <td>535</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Denniysa Adelita Nurlaka</td>
                            <td>X RPL B</td>
                            <td>88.5</td>
                            <td>531</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Dzulqarnain Zaliananda Amansyah</td>
                            <td>X RPL B</td>
                            <td>88.2</td>
                            <td>529</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

     <!-- banner buku -->

     <div class="container-fluid py-4">
        <div class="banner-container">
            <div class="decorative-circles">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>

            <div class="banner-content">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Gambar Buku -->
                        <div class="col-lg-3 col-md-4 col-sm-12 mb-4 mb-md-0">
                            <div class="book-container">
                                <img src="./assets/content/buku.png" alt="Tumpukan Buku" class="book-image">
                            </div>
                        </div>

                        <!-- Teks Utama -->
                        <div class="col-lg-6 col-md-4 col-sm-12 text-center mb-4 mb-md-0">
                            <div class="main-text">Sudah Membaca Peringkat?</div>
                            <div class="sub-text">Jika Sudah, Ayo Kumpulkan</div>
                            <div class="sub-text mb-4">Tugas-Tugas Teknik Informatika</div>
                            <button class="btn btn-danger btn-custom">Kumpulkan Tugas</button>
                        </div>

                        <!-- Maskot -->
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="mascot-container">
                                <img class="home-hero-image-home-center" src="./assets/content/maskot-peringkat.png" width="70%" height="70%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include './components/footer.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>