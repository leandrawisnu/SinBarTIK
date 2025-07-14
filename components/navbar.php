<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SinBar - SMK Negeri 4 Malang</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />

    <style>
        :root {
            --sinbar-blue: #2563eb;
            --sinbar-white: #ffffff;
            --sinbar-black: #1f2937;
            --sinbar-grey: #6b7280;
            --sinbar-light-grey: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--sinbar-light-grey);
        }

        /* Header Strip */
        .header-strip {
            background-color: var(--sinbar-blue);
            color: var(--sinbar-white);
            padding: 8px 0;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
        }

        /* Navbar Styling */
        .navbar {
            background-color: var(--sinbar-white);
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--sinbar-blue) !important;
            font-weight: 700;
            font-size: 24px;
            text-decoration: none;
            padding-left: 20px;
        }

        .navbar-brand:hover {
            color: var(--sinbar-blue) !important;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
        }

        .navbar-nav .nav-link {
            color: var(--sinbar-black) !important;
            font-weight: 600;
            font-size: 16px;
            padding: 8px 20px !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--sinbar-blue) !important;
        }

        .navbar-nav .nav-link.active {
            color: var(--sinbar-blue) !important;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--sinbar-blue);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 80%;
        }

        /* Navbar Toggler */
        .navbar-toggler {
            border: none;
            padding: 4px 8px;
            background: none;
            outline: none;
            box-shadow: none;
        }

        .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }

        .navbar-toggler:active {
            outline: none;
        }

        .navbar-toggler-icon {
            background-image: none;
            width: 24px;
            height: 24px;
        }

        .navbar-toggler .ph {
            font-size: 24px;
            color: var(--sinbar-blue);
            transition: all 0.3s ease;
        }

        /* Improved hamburger animation */
        .navbar-toggler .ph-list {
            display: block;
        }

        .navbar-toggler .ph-x {
            display: none;
        }

        .navbar-toggler[aria-expanded="true"] .ph-list {
            display: none;
        }

        .navbar-toggler[aria-expanded="true"] .ph-x {
            display: block;
        }

        /* Account Buttons */
        .account-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn-register {
            background-color: transparent;
            color: var(--sinbar-blue);
            border: 2px solid var(--sinbar-blue);
            padding: 8px 20px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-register:hover {
            background-color: var(--sinbar-blue);
            color: var(--sinbar-white);
        }

        .btn-login {
            background-color: var(--sinbar-blue);
            color: var(--sinbar-white);
            border: 2px solid var(--sinbar-blue);
            padding: 8px 20px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-login:hover {
            background-color: transparent;
            color: var(--sinbar-blue);
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .navbar-nav {
                margin-top: 1rem;
                padding-top: 1rem;
                border-top: 1px solid #e5e7eb;
            }

            .navbar-nav .nav-link {
                padding: 12px 0 !important;
            }

            .navbar-nav .nav-link::after {
                display: none;
            }

            .account-buttons {
                margin-top: 1rem;
                padding-top: 1rem;
                border-top: 1px solid #e5e7eb;
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .header-strip {
                font-size: 12px;
                padding: 6px 0;
            }

            .navbar-brand {
                font-size: 20px;
            }

            .logo-icon {
                width: 28px;
                height: 28px;
                font-size: 16px;
            }

            .account-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn-register,
            .btn-login {
                width: 100%;
                text-align: center;
            }
        }

        /* Smooth collapse transition */
        .navbar-collapse {
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <!-- Header Strip -->
    <div class="header-strip">
        <div class="container">
            <p class="mb-0">X RPL B - SMK NEGERI 4 MALANG</p>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Brand/Logo -->
            <a class="navbar-brand" href="#">
                <div class="logo-icon"><img src="./assets/icons/logo.png"></div>
                <span>SinBar</span>
            </a>

            <!-- Mobile Menu Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ph ph-list"></i>
                <i class="ph ph-x"></i>
            </button>

            <!-- Navbar Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='materi.php'>MATERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="peringkat.php">PERINGKAT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KONTAK</a>
                    </li>
                </ul>

                <!-- Account Buttons -->
                <div class="account-buttons d-lg-flex">
                    <a href="#" class="btn-register">GABUNG</a>
                    <a href="#" class="btn-login">MASUK</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Close mobile menu when clicking on nav links
            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.addEventListener('click', function() {
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    const navbarToggler = document.querySelector('.navbar-toggler');
                    
                    // Close the mobile menu if it's open
                    if (navbarCollapse.classList.contains('show')) {
                        const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
                        bsCollapse.hide();
                    }
                });
            });

            // Optional: Smooth scrolling for anchor links (hindari konflik dengan href="#")
            document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript for additional functionality -->
    <script>
        // Close mobile menu when clicking on nav links
        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                const navbarToggler = document.querySelector('.navbar-toggler');

                // Close the mobile menu if it's open
                if (navbarCollapse.classList.contains('show')) {
                    // Use Bootstrap's collapse method properly
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            });
        });

        // Optional: Smooth scrolling for anchor links (hindari konflik dengan href="#")
        document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

</body>

</html>