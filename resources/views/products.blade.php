@extends('layouts.app')

@section('title', 'Nos Produits - EcomSport')

@section('content')
<style>
    /* ===== PRODUCTS HEADER ===== */
    .products-header {
        text-align: center;
        margin: 40px 0 60px;
    }
    
    .products-header h1 {
        font-size: 42px;
        color: #0F172A;
        margin-bottom: 15px;
    }
    
    .products-header p {
        font-size: 18px;
        color: #64748B;
        max-width: 600px;
        margin: 0 auto 30px;
    }
    
    /* ===== FILTERS ===== */
    .filter-section {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }
    
    .filter-title {
        font-size: 18px;
        margin-bottom: 15px;
        color: #0F172A;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .filter-options {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .filter-btn {
        padding: 10px 20px;
        background: #F1F5F9;
        border: 2px solid #E2E8F0;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s;
        color: #64748B;
    }
    
    .filter-btn:hover {
        background: #E2E8F0;
    }
    
    .filter-btn.active {
        background: #F97316;
        color: white;
        border-color: #F97316;
    }
    
    /* ===== PRODUCTS TABLE ===== */
    .products-table-section {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        margin: 40px 0;
    }
    
    .table-container {
        overflow-x: auto;
    }
    
    .products-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 1000px;
    }
    
    .products-table thead {
        background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
    }
    
    .products-table th {
        color: white;
        font-weight: 600;
        text-align: left;
        padding: 20px 15px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .products-table tbody tr {
        border-bottom: 1px solid #E2E8F0;
        transition: background 0.3s;
    }
    
    .products-table tbody tr:hover {
        background: #F8FAFC;
    }
    
    .products-table td {
        padding: 20px 15px;
        vertical-align: middle;
    }
    
    /* ===== TABLE CELLS STYLES ===== */
    .product-image-cell {
        width: 100px;
    }
    
    .product-image {
        width: 80px;
        height: 80px;
        border-radius: 10px;
        overflow: hidden;
    }
    
    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .product-name {
        font-weight: 600;
        color: #0F172A;
        font-size: 16px;
    }
    
    .category-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }
    
    .category-sac {
        background: #DBEAFE;
        color: #1E40AF;
    }
    
    .category-fitness {
        background: #FCE7F3;
        color: #9D174D;
    }
    
    .category-running {
        background: #D1FAE5;
        color: #065F46;
    }
    
    .product-desc {
        color: #64748B;
        font-size: 14px;
        max-width: 250px;
    }
    
    .product-price {
        font-weight: 700;
        color: #0F172A;
        font-size: 18px;
    }
    
    .stock-status {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }
    
    .in-stock {
        background: #D1FAE5;
        color: #065F46;
    }
    
    .low-stock {
        background: #FEF3C7;
        color: #92400E;
    }
    
    .out-stock {
        background: #FEE2E2;
        color: #991B1B;
    }
    
    /* ===== ACTION BUTTONS ===== */
    .action-buttons {
        display: flex;
        gap: 10px;
    }
    
    .btn-cart {
        background: #F97316;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: background 0.3s;
        font-size: 14px;
    }

    .btn-cart:hover {
        background: #EA580C;
    }
    
    .btn-view {
        background: transparent;
        color: #F97316;
        border: 2px solid #F97316;
        padding: 8px 15px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s;
        font-size: 14px;
    }

    .btn-view:hover {
        background: #F97316;
        color: white;
    }
    
    /* ===== PRODUCTS STATS ===== */
    .products-stats {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background: #F8FAFC;
        border-radius: 12px;
        margin-top: 30px;
    }
    
    .stat-item {
        text-align: center;
    }
    
    .stat-number {
        font-size: 32px;
        font-weight: 700;
        color: #F97316;
        display: block;
    }
    
    .stat-label {
        color: #64748B;
        font-size: 14px;
    }
    
    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
        .table-container {
            margin: 0 -20px;
            padding: 0 20px;
        }
    }
    
    @media (max-width: 768px) {
        .products-header h1 {
            font-size: 32px;
        }
        
        .products-stats {
            flex-direction: column;
            gap: 20px;
        }
        
        .filter-options {
            justify-content: center;
        }
        
        .action-buttons {
            flex-direction: column;
        }
    }
</style>

<div class="products-header">
    <h1>Nos Produits</h1>
    <p>Découvrez notre sélection exclusive d'accessoires de sport haut de gamme</p>
</div>



<section class="products-table-section">
    <div class="table-container">
        <table class="products-table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Disponibilité</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div class="product-image">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFfhzlaR2KI37WLs0Od-c4Qhp56Dp0Iky9fQ&s" alt="Sac Sport Pro">
                            </div>
                            <div>
                                <div class="product-name">Sac Sport Pro 2024</div>
                                <div style="font-size: 14px; color: #94A3B8;">Réf: SSP24-BLK</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="category-badge category-sac">Sac de sport</span>
                    </td>
                    <td class="product-desc">
                        Sac compartimenté, imperméable, avec compartiment pour chaussures et pochette latérale pour gourde
                    </td>
                    <td class="product-price">299 DH</td>
                    <td>
                        <span class="stock-status in-stock">En stock</span>
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div class="product-image">
                                <img src="https://m.media-amazon.com/images/I/71gzagiKrjL._AC_SL1500_.jpg" alt="Haltères ajustables">
                            </div>
                            <div>
                                <div class="product-name">Haltères ajustables</div>
                                <div style="font-size: 14px; color: #94A3B8;">Réf: HAJ-20KG</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="category-badge category-fitness">Fitness</span>
                    </td>
                    <td class="product-desc">
                        Haltères de 2 à 20kg, réglables en 2 secondes, poignée ergonomique anti-dérapante
                    </td>
                    <td class="product-price">459 DH</td>
                    <td>
                        <span class="stock-status in-stock">En stock</span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div class="product-image">
                                <img src="https://www.sport-passion.fr/pictures/comparatif-montres-cartographie.jpg" alt="Montre Running GPS">
                            </div>
                            <div>
                                <div class="product-name">Montre Running GPS Pro</div>
                                <div style="font-size: 14px; color: #94A3B8;">Réf: MRG-PRO-BLK</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="category-badge category-running">Running</span>
                    </td>
                    <td class="product-desc">
                        GPS intégré, suivi cardiaque, oxymètre, étanche 50m, autonomie 7 jours
                    </td>
                    <td class="product-price">899 DH</td>
                    <td>
                        <span class="stock-status low-stock">Stock limité</span>
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div class="product-image">
                                <img src="https://www.objetpubdesign.com/171100-thickbox_default/bouteille-isotherme-personnalisable-1l-en-acier-recycle-avira.jpg" alt="Gourde Isotherme">
                            </div>
                            <div>
                                <div class="product-name">Gourde Isotherme 1L</div>
                                <div style="font-size: 14px; color: #94A3B8;">Réf: GI-1000-BLUE</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="category-badge category-fitness">Fitness</span>
                    </td>
                    <td class="product-desc">
                        Maintenant la température 24h, acier inoxydable, BPA Free, avec paille intégrée
                    </td>
                    <td class="product-price">149 DH</td>
                    <td>
                        <span class="stock-status in-stock">En stock</span>
                    </td>
                   
                </tr>
                
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div class="product-image">
                                <img src="https://m.media-amazon.com/images/I/61ka1wm7VzL.jpg" alt="Brassard Téléphone">
                            </div>
                            <div>
                                <div class="product-name">Brassard Running Premium</div>
                                <div style="font-size: 14px; color: #94A3B8;">Réf: BRP-NEO-BLK</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="category-badge category-running">Running</span>
                    </td>
                    <td class="product-desc">
                        Pour téléphone jusqu'à 7", anti-transpiration, ajustable, matériau néoprène
                    </td>
                    <td class="product-price">99 DH</td>
                    <td>
                        <span class="stock-status in-stock">En stock</span>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</section>

<div class="products-stats">
    <div class="stat-item">
        <span class="stat-number">24</span>
        <span class="stat-label">Produits disponibles</span>
    </div>
    <div class="stat-item">
        <span class="stat-number">6</span>
        <span class="stat-label">Catégories</span>
    </div>
    <div class="stat-item">
        <span class="stat-number">98%</span>
        <span class="stat-label">Clients satisfaits</span>
    </div>
</div>
@endsection