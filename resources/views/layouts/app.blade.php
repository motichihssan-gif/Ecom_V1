<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EcomSport - Accessoires Sport Élégants')</title>
    <style>
        /* ===== STYLES GÉNÉRAUX ===== */
        :root {
            --primary: #0F172A;
            --secondary: #F97316;
            --accent: #EAB308;
            --light: #F8FAFC;
            --dark: #1E293B;
            --gray: #64748B;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #F1F5F9;
            color: #0F172A;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            flex: 1;
        }
        
        /* ===== HEADER ===== */
        .navbar {
            background: #0F172A;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo {
            font-size: 28px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .logo-icon {
            color: #F97316;
            margin-right: 10px;
            font-size: 24px;
        }
        
        .logo span:last-child {
            color: #DC2626;
        }
        
        .tagline {
            font-size: 12px;
            opacity: 0.8;
            font-style: italic;
        }
        
        .navbar nav {
            display: flex;
            gap: 25px;
            align-items: center;
        }
        
        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 15px;
            border-radius: 6px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            background: rgba(255,255,255,0.1);
        }
        
        .nav-link.cart {
            background: #DC2626;
        }
        
        .nav-link.cart:hover {
            background: #B91C1C;
        }
        
        /* ===== FOOTER ===== */
        .footer {
            background: #0F172A;
            color: white;
            padding: 40px 0 20px;
            margin-top: 60px;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }
        
        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 18px;
        }
        
        .footer-section a {
            display: block;
            color: #CBD5E1;
            margin-bottom: 10px;
            text-decoration: none;
        }
        
        .footer-section a:hover {
            color: white;
        }
        
        .footer-section p {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            margin-top: 30px;
            border-top: 1px solid #334155;
            color: #94A3B8;
            font-size: 14px;
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
                gap: 15px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .container {
                padding: 0 15px;
            }
        }
    </style>
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="navbar">
    <div class="logo-container">
        <div class="logo">
            <i class="fas fa-dumbbell logo-icon"></i>
            <span>Ecom</span><span>Sport</span>
        </div>
        <p class="tagline">Performance & Élégance</p>
    </div>
    <nav>
        <a href="/" class="nav-link"><i class="fas fa-home"></i> Accueil</a>
        <a href="/products" class="nav-link"><i class="fas fa-store"></i> Produits</a>
        <a href="/about" class="nav-link"><i class="fas fa-info-circle"></i> À propos</a>
        <a href="/contact" class="nav-link"><i class="fas fa-envelope"></i> Contact</a>
    </nav>
</header>

<main class="container">
    @yield('content')
</main>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>EcomSport</h3>
            <p>Votre destination pour des accessoires de sport haut de gamme.</p>
        </div>
        <div class="footer-section">
            <h3>Liens rapides</h3>
            <a href="/">Accueil</a>
            <a href="/products">Produits</a>
            <a href="/about">À propos</a>
            <a href="/contact">Contact</a>
        </div>
        <div class="footer-section">
            <h3>Contact</h3>
            <p><i class="fas fa-envelope"></i> ihsane@ecomsport.com</p>
            <p><i class="fas fa-phone"></i> +212 623989094</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2026 EcomSport – Tous droits réservés</p>
    </div>
</footer>

</body>
</html>