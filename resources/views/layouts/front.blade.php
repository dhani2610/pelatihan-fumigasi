<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pelatihan & Sertifikasi Fumigasi Indonesia | Standar Karantina & ISPM 15')</title>
    <meta name="description" content="@yield('meta_description', 'Lembaga informasi, bimbingan teknis, dan sertifikasi kompetensi fumigasi resmi berstandar Badan Karantina Indonesia, AFAS, dan ISPM 15.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --bg-dark: #0c192c;
            --bg-card: #11223b;
            --bg-card-hover: #162c4c;
            --bg-light: #f8fafc;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --text-light: #94a3b8;
            --primary-gold: #f59e0b;
            --primary-gold-hover: #d97706;
            --accent-blue: #0284c7;
            --wa-green: #25d366;
            --wa-green-hover: #20ba5a;
            --border-dark: rgba(255, 255, 255, 0.1);
            --border-light: #e2e8f0;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.08);
            --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 25px -5px rgba(0,0,0,0.1);
            --radius-md: 8px;
            --radius-lg: 12px;
            --radius-xl: 16px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            background-color: #ffffff;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.2s ease;
        }

        /* SVG & PAGINATION SAFETY */
        svg {
            max-width: 100%;
        }

        nav[role="navigation"] svg {
            width: 18px !important;
            height: 18px !important;
            max-width: 18px !important;
            max-height: 18px !important;
            display: inline-block !important;
            vertical-align: middle !important;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* HEADER / NAVBAR */
        .site-header {
            background: var(--bg-dark);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--border-dark);
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 74px;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.25rem;
            box-shadow: 0 2px 8px rgba(245, 158, 11, 0.4);
        }

        .brand-text h1 {
            font-size: 0.95rem;
            font-weight: 800;
            letter-spacing: 0.5px;
            color: #ffffff;
            line-height: 1.2;
        }

        .brand-text h1 span {
            color: var(--primary-gold);
        }

        .brand-text p {
            font-size: 0.68rem;
            color: var(--text-light);
            letter-spacing: 0.3px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 24px;
        }

        .nav-link {
            color: #cbd5e1;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 6px 4px;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: #ffffff;
        }

        .nav-link:hover::after, .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary-gold);
            border-radius: 2px;
        }

        .btn-wa-header {
            background: var(--primary-gold);
            color: #0c192c;
            font-size: 0.85rem;
            font-weight: 700;
            padding: 9px 18px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
        }

        .btn-wa-header:hover {
            background: #fbbf24;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
            color: #0c192c;
        }

        .mobile-toggle {
            display: none;
            background: transparent;
            border: none;
            color: #ffffff;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* MOBILE DRAWER */
        .mobile-drawer {
            position: fixed;
            top: 74px;
            left: 0;
            width: 100%;
            background: var(--bg-dark);
            border-bottom: 1px solid var(--border-dark);
            padding: 20px;
            display: none;
            flex-direction: column;
            gap: 16px;
            z-index: 999;
            box-shadow: 0 10px 20px rgba(0,0,0,0.5);
        }

        .mobile-drawer.open {
            display: flex;
        }

        .mobile-nav-link {
            color: #cbd5e1;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* HERO DARK SECTION */
        .hero-section {
            background-color: var(--bg-dark);
            background-image: 
                radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 20% 80%, rgba(2, 132, 199, 0.08) 0%, transparent 40%),
                linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 30px 30px, 30px 30px;
            color: #ffffff;
            padding: 70px 0 60px;
            text-align: center;
            position: relative;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.12);
            border: 1px solid rgba(245, 158, 11, 0.35);
            color: var(--primary-gold);
            font-size: 0.78rem;
            font-weight: 700;
            padding: 6px 16px;
            border-radius: 30px;
            margin-bottom: 24px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            line-height: 1.25;
            max-width: 900px;
            margin: 0 auto 18px;
        }

        .hero-title .text-highlight {
            color: var(--primary-gold);
            display: inline-block;
        }

        .hero-desc {
            font-size: 1rem;
            color: #94a3b8;
            max-width: 760px;
            margin: 0 auto 32px;
            line-height: 1.7;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .btn-primary-gold {
            background: var(--primary-gold);
            color: #0c192c;
            font-size: 0.95rem;
            font-weight: 700;
            padding: 13px 26px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35);
            transition: all 0.2s ease;
        }

        .btn-primary-gold:hover {
            background: #fbbf24;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(245, 158, 11, 0.45);
            color: #0c192c;
        }

        .btn-outline-light {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 13px 24px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
        }

        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
            color: #ffffff;
        }

        /* HERO STATS BAR */
        .hero-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            max-width: 950px;
            margin: 0 auto;
            border-top: 1px solid var(--border-dark);
            padding-top: 36px;
            gap: 20px;
        }

        .stat-item h3 {
            font-size: 1.45rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .stat-item p {
            font-size: 0.8rem;
            color: #64748b;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* NOTICE ALERT BOX */
        .notice-container {
            margin-top: -24px;
            margin-bottom: 40px;
            position: relative;
            z-index: 10;
        }

        .notice-card {
            background: #fffbeb;
            border: 1px solid #fde68a;
            border-radius: 10px;
            padding: 16px 20px;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            font-size: 0.86rem;
            color: #92400e;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.08);
            line-height: 1.6;
        }

        .notice-card i {
            font-size: 1.25rem;
            color: #d97706;
            margin-top: 2px;
            flex-shrink: 0;
        }

        /* SECTION STYLING */
        .section-padding {
            padding: 70px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 48px;
        }

        .section-badge {
            display: inline-block;
            font-size: 0.72rem;
            font-weight: 800;
            color: #d97706;
            background: #fef3c7;
            padding: 4px 12px;
            border-radius: 20px;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 1.85rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
            letter-spacing: -0.3px;
        }

        .section-subtitle {
            font-size: 0.95rem;
            color: var(--text-muted);
            max-width: 650px;
            margin: 0 auto;
        }

        /* PROGRAM CARDS (MATCHING SCREENSHOT) */
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .program-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
            position: relative;
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
        }

        .program-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -10px rgba(15, 23, 42, 0.12);
            border-color: #cbd5e1;
        }

        .program-card.featured {
            border: 2px solid var(--primary-gold);
            background: #ffffff;
        }

        .program-badge-top {
            position: absolute;
            top: -12px;
            right: 20px;
            background: var(--primary-gold);
            color: #0c192c;
            font-size: 0.68rem;
            font-weight: 800;
            padding: 3px 12px;
            border-radius: 20px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .program-level {
            font-size: 0.72rem;
            font-weight: 800;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .program-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
            line-height: 1.35;
        }

        .program-desc {
            font-size: 0.85rem;
            color: #64748b;
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .program-features {
            list-style: none;
            margin-bottom: 24px;
            border-top: 1px solid #f1f5f9;
            padding-top: 16px;
        }

        .program-features li {
            font-size: 0.82rem;
            color: #475569;
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .program-features li i {
            color: #10b981;
            font-size: 0.95rem;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .btn-card-wa {
            background: #0c192c;
            color: #ffffff;
            font-size: 0.85rem;
            font-weight: 700;
            padding: 12px 18px;
            border-radius: 8px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 12px;
            transition: all 0.2s ease;
        }

        .btn-card-wa:hover {
            background: #1e293b;
            color: #ffffff;
        }

        .program-card.featured .btn-card-wa {
            background: var(--primary-gold);
            color: #0c192c;
        }

        .program-card.featured .btn-card-wa:hover {
            background: #fbbf24;
            color: #0c192c;
        }

        .btn-card-detail {
            font-size: 0.82rem;
            font-weight: 700;
            color: #475569;
            text-align: center;
            display: block;
            padding: 4px;
        }

        .btn-card-detail:hover {
            color: #0f172a;
            text-decoration: underline;
        }

        /* ADVANTAGES / KEUNGGULAN SECTION */
        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .advantage-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 22px;
            transition: all 0.25s ease;
        }

        .advantage-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px -6px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }

        .advantage-icon {
            width: 46px;
            height: 46px;
            background: #fffbeb;
            border: 1px solid #fde68a;
            color: #d97706;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 18px;
        }

        .advantage-title {
            font-size: 1.05rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .advantage-desc {
            font-size: 0.82rem;
            color: #64748b;
            line-height: 1.6;
        }

        /* WILAYAH / REGIONS GRID (MATCHING SCREENSHOT 1) */
        .regions-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .region-card-btn {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.2s ease;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
        }

        .region-card-btn:hover {
            border-color: #94a3b8;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0,0,0,0.06);
            background: #f8fafc;
        }

        .region-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
        }

        .region-count {
            font-size: 0.72rem;
            font-weight: 600;
            color: #64748b;
            background: #f1f5f9;
            padding: 4px 10px;
            border-radius: 20px;
            white-space: nowrap;
        }

        /* KABKOT GRID BUTTONS (MATCHING SCREENSHOT 2 & 3) */
        .kabkot-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        .kabkot-btn {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 14px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #1e293b;
            text-align: center;
            display: block;
            transition: all 0.2s ease;
            box-shadow: 0 1px 2px rgba(0,0,0,0.03);
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .kabkot-btn:hover {
            border-color: #cbd5e1;
            background: #f8fafc;
            color: #0284c7;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.06);
        }

        .kabkot-btn.active {
            border-color: var(--primary-gold);
            background: #fffbeb;
            color: #92400e;
            font-weight: 700;
        }

        /* FAQ ACCORDION (MATCHING SCREENSHOT) */
        .faq-wrapper {
            max-width: 820px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.2s ease;
        }

        .faq-question {
            padding: 18px 24px;
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            user-select: none;
        }

        .faq-question i {
            font-size: 1.1rem;
            color: #94a3b8;
            transition: transform 0.25s ease;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
            color: var(--primary-gold);
        }

        .faq-answer {
            padding: 0 24px 20px 24px;
            font-size: 0.86rem;
            color: #475569;
            line-height: 1.7;
            display: none;
            border-top: 1px solid #f8fafc;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        /* CTA BANNER DARK (MATCHING SCREENSHOT 2 & 3) */
        .cta-dark-banner {
            background: var(--bg-dark);
            color: #ffffff;
            padding: 60px 20px;
            text-align: center;
            border-radius: 16px;
            margin: 50px auto;
            max-width: 1200px;
            position: relative;
            overflow: hidden;
        }

        .cta-dark-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(245, 158, 11, 0.12) 0%, transparent 60%);
            pointer-events: none;
        }

        .cta-dark-banner h2 {
            font-size: 1.75rem;
            font-weight: 800;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cta-dark-banner h2 span {
            color: var(--primary-gold);
        }

        .cta-dark-banner p {
            font-size: 0.9rem;
            color: #94a3b8;
            max-width: 600px;
            margin: 0 auto 28px;
        }

        .cta-banner-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        /* ARTICLES GRID */
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .article-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
        }

        .article-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 28px -8px rgba(15, 23, 42, 0.1);
            border-color: #cbd5e1;
        }

        .article-img-wrap {
            height: 190px;
            background: linear-gradient(135deg, #0c192c 0%, #1e3a8a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 2.5rem;
            position: relative;
        }

        .article-category-badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: rgba(12, 25, 44, 0.85);
            backdrop-filter: blur(4px);
            color: var(--primary-gold);
            border: 1px solid rgba(245, 158, 11, 0.4);
            font-size: 0.68rem;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 20px;
            text-transform: uppercase;
        }

        .article-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .article-meta {
            font-size: 0.75rem;
            color: #94a3b8;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .article-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
            line-height: 1.45;
        }

        .article-excerpt {
            font-size: 0.82rem;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .article-link {
            font-size: 0.82rem;
            font-weight: 700;
            color: #0284c7;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .article-link:hover {
            color: #0369a1;
            gap: 8px;
        }

        /* BREADCRUMB */
        .breadcrumb-bar {
            padding: 16px 0;
            font-size: 0.78rem;
            color: #94a3b8;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .breadcrumb-bar a {
            color: #64748b;
        }

        .breadcrumb-bar a:hover {
            color: var(--primary-gold);
        }

        /* FLOATING WHATSAPP BUTTON (MATCHING SCREENSHOT) */
        .wa-floating-btn {
            position: fixed;
            bottom: 26px;
            right: 26px;
            width: 58px;
            height: 58px;
            background: var(--wa-green);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.95rem;
            box-shadow: 0 4px 18px rgba(37, 211, 102, 0.45);
            z-index: 9999;
            transition: all 0.25s ease;
            text-decoration: none;
        }

        .wa-floating-btn:hover {
            transform: scale(1.08) translateY(-3px);
            background: var(--wa-green-hover);
            color: #ffffff;
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.55);
        }

        .wa-pulse {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(37, 211, 102, 0.4);
            animation: pulse-wave 2s infinite;
            z-index: -1;
        }

        @keyframes pulse-wave {
            0% { transform: scale(1); opacity: 0.8; }
            100% { transform: scale(1.6); opacity: 0; }
        }

        /* FOOTER (MATCHING SCREENSHOT) */
        .site-footer {
            background: var(--bg-dark);
            color: #94a3b8;
            padding: 60px 0 30px;
            border-top: 1px solid var(--border-dark);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1.2fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-col h4 {
            font-size: 0.78rem;
            font-weight: 800;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 18px;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links li a {
            font-size: 0.82rem;
            color: #94a3b8;
        }

        .footer-links li a:hover {
            color: var(--primary-gold);
        }

        .footer-desc {
            font-size: 0.82rem;
            color: #64748b;
            line-height: 1.6;
            margin: 14px 0 20px;
        }

        .btn-wa-footer {
            background: var(--wa-green);
            color: #ffffff;
            font-size: 0.82rem;
            font-weight: 700;
            padding: 9px 16px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-wa-footer:hover {
            background: var(--wa-green-hover);
            color: #ffffff;
        }

        .footer-bottom {
            border-top: 1px solid var(--border-dark);
            padding-top: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.75rem;
            color: #64748b;
            flex-wrap: wrap;
            gap: 12px;
        }

        /* RESPONSIVE BREAKPOINTS */
        @media (max-width: 992px) {
            .nav-menu, .btn-wa-header {
                display: none;
            }
            .mobile-toggle {
                display: block;
            }
            .programs-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .advantages-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .regions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .kabkot-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .articles-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .hero-title {
                font-size: 1.85rem;
            }
            .programs-grid {
                grid-template-columns: 1fr;
            }
            .advantages-grid {
                grid-template-columns: 1fr;
            }
            .regions-grid {
                grid-template-columns: 1fr;
            }
            .kabkot-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .articles-grid {
                grid-template-columns: 1fr;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .hero-stats {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- SITE HEADER -->
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="brand-logo">
                    <div class="brand-icon">
                        <i class="bi bi-shield-shaded"></i>
                    </div>
                    <div class="brand-text">
                        <h1>SERTIFIKASI <span>FUMIGASI</span></h1>
                        <p>Standar Karantina & Keselamatan Fumigasi Nasional</p>
                    </div>
                </a>

                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}#program" class="nav-link">Program Pelatihan</a></li>
                    <li><a href="{{ route('home') }}#keunggulan" class="nav-link">Keunggulan</a></li>
                    <li><a href="{{ route('home') }}#faq" class="nav-link">FAQ</a></li>
                    <li><a href="{{ route('articles') }}" class="nav-link">Artikel</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Hubungi Kami</a></li>
                    <li><a href="{{ route('home') }}#wilayah" class="nav-link">Wilayah</a></li>
                </ul>

                <a href="{{ $waLink ?? '#' }}" target="_blank" class="btn-wa-header">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi WhatsApp
                </a>

                <button class="mobile-toggle" id="mobileToggle" aria-label="Buka Menu">
                    <i class="bi bi-list"></i>
                </button>
            </nav>
        </div>

        <!-- Mobile Drawer -->
        <div class="mobile-drawer" id="mobileDrawer">
            <a href="{{ route('home') }}#program" class="mobile-nav-link">Program Pelatihan <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('home') }}#keunggulan" class="mobile-nav-link">Keunggulan <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('home') }}#faq" class="mobile-nav-link">FAQ <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('articles') }}" class="mobile-nav-link">Artikel & Panduan <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('contact') }}" class="mobile-nav-link">Hubungi Kami <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('home') }}#wilayah" class="mobile-nav-link">Jelajahi Wilayah <i class="bi bi-chevron-right"></i></a>
            <a href="{{ $waLink ?? '#' }}" target="_blank" class="btn-primary-gold" style="justify-content: center; margin-top: 8px;">
                <i class="bi bi-whatsapp"></i> Konsultasi WhatsApp Sekarang
            </a>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="brand-logo" style="margin-bottom: 12px;">
                        <div class="brand-icon">
                            <i class="bi bi-shield-shaded"></i>
                        </div>
                        <div class="brand-text">
                            <h3 style="font-size: 0.95rem; font-weight: 800; color: #fff;">SERTIFIKASI <span style="color: var(--primary-gold);">FUMIGASI</span></h3>
                        </div>
                    </div>
                    <p class="footer-desc">
                        Penyedia layanan informasi, bimbingan teknis, dan sertifikasi keselamatan serta efektivitas fumigasi bagi tenaga kerja profesional di seluruh Indonesia.
                    </p>
                    <a href="{{ $waLink ?? '#' }}" target="_blank" class="btn-wa-footer">
                        <i class="bi bi-whatsapp"></i> Konsultasi WhatsApp
                    </a>
                </div>

                <div class="footer-col">
                    <h4>Program Pelatihan</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}#program">Training Fumigasi Muda</a></li>
                        <li><a href="{{ route('home') }}#program">Training Fumigasi Madya</a></li>
                        <li><a href="{{ route('home') }}#program">Training Fumigasi Utama & AFAS</a></li>
                        <li><a href="{{ route('home') }}#program">In-House Training Perusahaan</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Informasi & Panduan</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}#keunggulan">Keunggulan Pelatihan</a></li>
                        <li><a href="{{ route('articles') }}">Artikel & Regulasi Ekspor</a></li>
                        <li><a href="{{ route('home') }}#faq">Pertanyaan Umum (FAQ)</a></li>
                        <li><a href="{{ route('contact') }}">Hubungi Tim Konsultan</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Komitmen Karantina & K3</h4>
                    <p class="footer-desc">
                        Mewujudkan standar perlakuan komoditas bebas hama karantina (Zero Infestation) melalui kepatuhan ketat terhadap protokol keselamatan fumigan beracun nasional dan internasional.
                    </p>
                    <div style="font-size: 0.78rem; color: #cbd5e1; display: flex; align-items: center; gap: 8px;">
                        <span style="display: inline-block; width: 8px; height: 8px; background: #10b981; border-radius: 50%;"></span>
                        Respon konsultasi cepat setiap hari kerja
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div>
                    &copy; {{ date('Y') }} Sertifikasi Fumigasi Indonesia. Seluruh hak cipta dilindungi.
                </div>
                <div>
                    Layanan Informasi & Pelatihan Fumigasi Seluruh Wilayah Indonesia
                </div>
            </div>
        </div>
    </footer>

    <!-- FLOATING WHATSAPP BUTTON (081399810272) -->
    <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Pelatihan Fumigasi, saya ingin konsultasi pendaftaran pelatihan fumigasi.') }}" target="_blank" class="wa-floating-btn" title="Konsultasi WhatsApp: 081399810272" id="floatingWaBtn">
        <span class="wa-pulse"></span>
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- SCRIPTS -->
    <script>
        // Mobile Toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const mobileDrawer = document.getElementById('mobileDrawer');
        if (mobileToggle && mobileDrawer) {
            mobileToggle.addEventListener('click', () => {
                mobileDrawer.classList.toggle('open');
            });
            // Close drawer on link click
            mobileDrawer.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileDrawer.classList.remove('open');
                });
            });
        }

        // Accordion helper
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const parent = item.parentElement;
                parent.classList.toggle('active');
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
