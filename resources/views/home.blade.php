@extends('layouts.app')

@section('content')
<style>
    /* ===== HERO SECTION ===== */
    .hero {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 60px 40px;
        background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
        color: white;
        border-radius: 16px;
        margin: 40px 0;
        gap: 40px;
    }
    
    .hero-content {
        flex: 1;
    }
    
    .hero h1 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.2;
    }
    
    .hero-subtitle {
        font-size: 18px;
        opacity: 0.9;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    
    .hero-image {
        flex: 1;
        text-align: center;
    }
    
    .hero-image img {
        max-width: 100%;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    }
    
    /* ===== BOUTONS ===== */
    .btn {
        display: inline-block;
        padding: 14px 32px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 16px;
        margin-right: 15px;
        transition: all 0.3s;
        border: 2px solid transparent;
    }
    
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    
    .btn-primary {
        background: #F97316;
        color: white;
    }

    .btn-primary:hover {
        background: #EA580C;
    }
    
    .btn-secondary {
        background: transparent;
        color: white;
        border-color: white;
    }
    
    .btn-secondary:hover {
        background: white;
        color: #0F172A;
    }
    
    /* ===== FEATURES ===== */
    .features {
        margin: 80px 0;
        text-align: center;
    }
    
    .features h2 {
        font-size: 32px;
        color: #0F172A;
        margin-bottom: 20px;
    }
    
    .features-subtitle {
        color: #64748B;
        font-size: 18px;
        margin-bottom: 50px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .feature-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    
    .feature-card {
        background: white;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
    }
    
    .feature-card i {
        font-size: 42px;
        color: #F97316;
        margin-bottom: 25px;
    }
    
    .feature-card h3 {
        font-size: 22px;
        margin-bottom: 15px;
        color: #0F172A;
    }
    
    .feature-card p {
        color: #64748B;
        line-height: 1.6;
    }
    
    /* ===== PRODUCTS PREVIEW ===== */
    .products-preview {
        margin: 80px 0;
    }
    
    .products-preview h2 {
        font-size: 32px;
        text-align: center;
        color: #0F172A;
        margin-bottom: 50px;
    }
    
    .category-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    
    .category-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }
    
    .category-card:hover {
        transform: translateY(-10px);
    }
    
    .category-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
    
    .category-card-content {
        padding: 25px;
    }
    
    .category-card h3 {
        font-size: 22px;
        margin-bottom: 10px;
        color: #0F172A;
    }
    
    .category-card p {
        color: #64748B;
        margin-bottom: 20px;
    }
    
    .category-link {
        display: inline-block;
        color: #F97316;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .category-link:hover {
        text-decoration: underline;
    }
    
    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .hero {
            flex-direction: column;
            text-align: center;
        }
        
        .feature-cards,
        .category-cards {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 32px;
        }
        
        .feature-cards,
        .category-cards {
            grid-template-columns: 1fr;
        }
        
        .btn {
            display: block;
            margin: 10px 0;
            width: 100%;
            text-align: center;
        }
    }
</style>

<section class="hero">
    <div class="hero-content">
        <h1>Accessoires de Sport Élégants</h1>
        <p class="hero-subtitle">Performance & Style pour Hommes et Femmes – Conçus pour votre quotidien actif</p>
        <div class="hero-buttons">
            <a class="btn btn-primary" href="/products">Découvrir la collection</a>
            <a class="btn btn-secondary" href="/about">Notre histoire</a>
        </div>
    </div>
    <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Accessoires de sport">
    </div>
</section>

<section class="features">
    <h2>Pourquoi choisir EcomSport ?</h2>
    <p class="features-subtitle">Une expérience shopping sportive unique, alliant qualité et élégance</p>
    
    <div class="feature-cards">
        <div class="feature-card">
            <i class="fas fa-shipping-fast"></i>
            <h3>Livraison Rapide</h3>
            <p>Expédition sous 24h partout au Maroc</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-award"></i>
            <h3>Qualité Premium</h3>
            <p>Produits certifiés et testés en conditions réelles</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-headset"></i>
            <h3>Support 7j/7</h3>
            <p>Une équipe dédiée à votre satisfaction</p>
        </div>
    </div>
</section>

<section class="products-preview">
    <h2>Nos Catégories Populaires</h2>
    
    <div class="category-cards">
        <div class="category-card">
            <img src="/images/products/sac-sport-pro.svg" alt="Sacs de sport">
            <div class="category-card-content">
                <h3>Sacs de Sport</h3>
                <p>Design élégant, compartimenté et fonctionnel pour tous vos déplacements</p>
                <a href="/products?category=sacs" class="category-link">Voir les produits →</a>
            </div>
        </div>
        
        <div class="category-card">
            <img src="/images/products/halteres-ajustables.svg" alt="Accessoires fitness">
            <div class="category-card-content">
                <h3>Accessoires Fitness</h3>
                <p>Matériel d'entraînement innovant pour des séances efficaces</p>
                <a href="/products?category=fitness" class="category-link">Découvrir →</a>
            </div>
        </div>
        
        <div class="category-card">
            <img src="/images/products/montre-running-gps.svg" alt="Équipements running">
            <div class="category-card-content">
                <h3>Running & Trail</h3>
                <p>Équipements techniques pour optimiser vos performances</p>
                <a href="/products?category=running" class="category-link">Explorer →</a>
            </div>
        </div>
    </div>
</section>
@endsection