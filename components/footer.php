<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer SinBar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .footer-container {
            background-color: #ffffff;
            border-top: 3px solid #e9ecef;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo-section {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
            margin-top: 20px
        }

        .logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        .description {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 30px;
            text-align: justify;
        }

        .contact-section h5 {
            color: #333;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-info {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .contact-info .contact-item {
            margin-bottom: 8px;
        }

        .contact-info .contact-item i {
            width: 20px;
            color: #007bff;
            margin-right: 8px;
        }

        .development-section h5 {
            color: #333;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .developer-info {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .developer-info .dev-item {
            margin-bottom: 5px;
        }

        .bottom-bar {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            padding: 15px 0;
            text-align: center;
            font-size: 0.9rem;
            font-weight: 500;
            margin-top: 30px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .footer-content {
                padding: 0 15px;
            }

            .logo-section {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .logo {
                width: 45px;
                height: 45px;
                font-size: 1rem;
            }

            .logo-text {
                font-size: 1.3rem;
            }

            .description {
                text-align: center;
                margin-bottom: 25px;
            }

            .contact-section,
            .development-section {
                text-align: center;
                margin-bottom: 25px;
            }

            .bottom-bar {
                font-size: 0.8rem;
                padding: 12px 0;
            }
        }

        @media (max-width: 576px) {
            .footer-container {
                padding: 30px 0;
            }

            .logo-section {
                margin-bottom: 15px;
            }

            .description {
                font-size: 0.85rem;
                margin-bottom: 20px;
            }

            .contact-section h5,
            .development-section h5 {
                font-size: 0.95rem;
            }

            .contact-info,
            .developer-info {
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>


    <!-- Footer -->
    <footer class="footer-container">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Logo dan Deskripsi -->
                    <div class="col-lg-6 col-md-12">
                        <div class="logo-section">
                            <div class="logo-icon"><img src="./assets/icons/logo.png"></div>
                            <span>SinBar</span>
                        </div>
                        <p class="description">
                            Website ini dibuat untuk lebih memudahkan mempelajari
                            informatika tanpa harus melakukan tatap muka. Pembelajaran
                            dapat dilakukan dimana saja dan kapan saja. Semakin
                            berkembangnya teknologi, siswa juga diharuskan mengetahui
                            perkembangan teknologi.
                        </p>
                    </div>

                    <!-- Kontak dan Pengembang -->
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <!-- Kontak -->
                            <div class="col-md-6 col-sm-12">
                                <div class="contact-section">
                                    <h5>Kontak</h5>
                                    <div class="contact-info">
                                        <div class="contact-item">
                                            <i class="fas fa-user"></i>
                                            Pak Sasongko
                                        </div>
                                        <div class="contact-item">
                                            <i class="fas fa-phone"></i>
                                            +62 821 4532 2303
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pengembang -->
                            <div class="col-md-6 col-sm-12">
                                <div class="development-section">
                                    <h5>PENGEMBANG</h5>
                                    <div class="developer-info">
                                        <div class="dev-item">Dzulqarnain Zaliananda Amansyah</div>
                                        <div class="dev-item">Auni Hamizan</div>
                                        <div class="dev-item">Muhammad Leandra Wisnu</div>
                                        <div class="dev-item">Rafi Iqbal Firmansyah</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="bottom-bar">
            X RPL B - SMK NEGERI 4 MALANG
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>