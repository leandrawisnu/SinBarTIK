<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SinBarTIK - Website untuk Mempelajari Informatika</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        :root {
            --sinbar-blue: #4A90E2;
            --sinbar-light-blue: #E3F2FD;
            --sinbar-dark-blue: #2171B5;
            --sinbar-black: #333333;
            --sinbar-gray: rgb(231, 231, 231);
            --sinbar-card: rgb(219, 237, 255);
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
            font-size: 2rem;
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

        .podium-container {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            margin-bottom: 40px;
            height: 250px;
            gap: 10px;
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

        .dashboard-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .main-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
        }

        .dashboard-title {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
            letter-spacing: 1px;
        }

        .subject-card {
            background:rgb(219, 237, 255);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
            height: 180px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .subject-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            border-color: #007bff;
        }

        .subject-icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 15px;
        }

        .subject-title {
            font-size: 1.1rem;
            font-weight: 450;
            color: #007bff;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .subject-subtitle {
            color: #6c757d;
            font-size: 0.9rem;
            margin-top: auto;
        }

        .view-all-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            margin-top: 30px;
            transition: all 0.3s ease;
        }

        .view-all-btn:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        .btn-container {
            text-align: center;
        }

        /* Custom icons using CSS shapes */
        .brain-icon::before {
            content: "🧠";
            font-size: 3rem;
        }

        .signal-icon::before {
            content: "📡";
            font-size: 3rem;
        }

        .computer-icon::before {
            content: "💻";
            font-size: 3rem;
        }

        .network-icon::before {
            content: "🌐";
            font-size: 3rem;
        }

        .code-icon::before {
            content: "💻";
            font-size: 3rem;
        }

        .data-icon::before {
            content: "📊";
            font-size: 3rem;
        }

        @media (max-width: 768px) {
            .dashboard-title {
                font-size: 1.5rem;
            }

            .subject-card {
                height: 160px;
                padding: 15px;
            }

            .subject-icon {
                font-size: 2.5rem;
            }

            .subject-title {
                font-size: 1rem;
            }
        }

        .footer {
            margin-top: 10px;
        }

        /* .sas{
            width: 30%;
        }

        .home-hero-image-home{
            width: 70%;
            margin-left: 55px;

        } */
    </style>
</head>

<body>

    <?php include './components/navbar.php'; ?>
    <!-- Hero Section -->
    <div class="home-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h1 class="hero-title">Selamat Datang di Website SinBarTIK</h1>
                    <p class="hero-subtitle">Website untuk Mempelajari Informatika</p>
                </div>
                <div class="col-lg-6 col-md-6 sas">
                    <div class="d-flex justify-content-center">
                        <div style="width: fit-content;">
                            <img class="home-hero-image-home-center" src="./assets/content/maskot-materi.png">
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
                            <p class="peringkat-subtitle">PERINGKAT SINBAR UNTUK BULAN INI</p>
                            <a href="#" class="peringkat-button">LIHAT PERINGKAT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Section -->
    <div class="dashboard-container">
        <div class="main-card">
            <h1 class="dashboard-title">MATERI SINBAR</h1>

            <div class="container-fluid">
                <div class="row">
                    <!-- Berpikir Komputasi -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="subject-card">
                            <div class="text-center">
                                <div class="subject-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <h3 class="subject-title">Berpikir Komputasi</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Teknologi Informasi dan Komunikasi -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="subject-card">
                            <div class="text-center">
                                <div class="subject-icon">
                                    <i class="fas fa-signal"></i>
                                </div>
                                <h3 class="subject-title">Teknologi Informasi dan Komunikasi</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Sistem Komputer -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="subject-card">
                            <div class="text-center">
                                <div class="subject-icon">
                                    <i class="fas fa-desktop"></i>
                                </div>
                                <h3 class="subject-title">Sistem Komputer</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Jaringan Komputer dan Internet -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="subject-card">
                            <div class="text-center">
                                <div class="subject-icon">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h3 class="subject-title">Jaringan Komputer dan Internet</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Algoritma Pemrograman dan Praktik Lintas Bidang -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="subject-card">
                            <div class="text-center">
                                <div class="subject-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h3 class="subject-title">Algoritma Pemrograman dan Praktik Lintas Bidang</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Analisis Data dan Dampak Sosial Informatika -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="subject-card">
                            <div class="text-center">
                                <div class="subject-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <h3 class="subject-title">Analisis Data dan Dampak Sosial Informatika</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer"><?php include './components/footer.php' ?></div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Animasi masuk untuk kartu-kartu
        window.addEventListener('load', function() {
            const cards = document.querySelectorAll('.subject-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    card.style.transition = 'all 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>

</html>