    <!-- Favicon -->
    <link href="{{ asset('Assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('Assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet">

    <style>
        /* === CARD STYLING === */
        .glass-card {
            background: #F5F5DC;
            backdrop-filter: blur(10px);
            border-radius: 1.2rem;
            padding: 1.5rem;
            position: relative;
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
        }

        .booking-card .icon-header {
            text-align: center;
        }
        .icon-gradient {
            font-size: 40px;
            background: #000923;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .status-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        .btn-gradient {
            background: linear-gradient(45deg, #a3a467, #eeefb6ff);
            border: none;
            color: white;
            border-radius: 30px;
            transition: all 0.3s;
            font-weight: 600;
        }
        .btn-gradient:hover {
            background: linear-gradient(90deg, #a4a568ff, #feffdaff);
            transform: translateY(-2px);
        }

        .glow-bg {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at top left, rgba(0, 180, 216, 0.15), transparent 70%);
            z-index: 0;
            transition: opacity 0.3s ease;
            opacity: 0;
        }
        .glass-card:hover .glow-bg {
            opacity: 1;
        }

        .glass-card .card-body {
            position: relative;
            z-index: 2;
        }

        .text-gradient {
            background: #a3a467;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .input-glass {
            background: #F5F5DC !important;
            border: 1px solid rgba(238, 194, 0, 0.24);
            color: #000923 !important;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .input-glass:focus {
            border-color: #d5d593ff;
            box-shadow: 0 0 10px rgba(0, 180, 216, 0.3);
            background: #F5F5DC !important;
        }

        .text-light-50 {
            color: rgba(255,255,255,0.7);
        }
    </style>
