@extends('layouts.front')

@section('title', 'Artikel & Panduan Pelatihan Fumigasi | Standar Barantin & ISPM 15')
@section('meta_description', 'Kumpulan artikel dan panduan teknis regulasi fumigasi, standar AFAS, ISPM 15, dan keselamatan kerja penanganan gas fumigan.')

@section('content')

    <!-- HERO SECTION (ARTIKEL) -->
    <section class="hero-section" style="padding-top: 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-book-half"></i>
                Edukasi & Literasi Fumigasi
            </div>

            <h1 class="hero-title">
                Artikel & Panduan <span class="text-highlight">Fumigasi</span>
            </h1>

            <p class="hero-desc">
                Informasi otoritatif mengenai standar keselamatan fumigasi, regulasi karantina ekspor, pedoman teknis perlakuan Fosfin & Metil Bromida, dan panduan sertifikasi kompetensi.
            </p>
        </div>
    </section>

    <!-- ARTICLES LIST -->
    <section class="section-padding" style="padding-top: 50px;">
        <div class="container">
            <div class="articles-grid">
                @forelse($articles as $art)
                    <div class="article-card">
                        <div class="article-img-wrap" style="height: 200px; background: linear-gradient(135deg, #0f223d 0%, #1e3a8a 100%);">
                            <i class="bi bi-shield-shaded" style="font-size: 3rem; color: rgba(245, 158, 11, 0.8);"></i>
                            <div class="article-category-badge">{{ $art->category }}</div>
                        </div>
                        <div class="article-body">
                            <div class="article-meta" style="justify-content: space-between; margin-bottom: 14px;">
                                <span style="font-size: 0.76rem; color: #64748b; font-weight: 600;">
                                    {{ $art->published_at ? $art->published_at->format('d M Y') : 'Terbaru' }}
                                </span>
                                @if($art->region)
                                    <span style="border: 1px solid #cbd5e1; font-size: 0.68rem; font-weight: 700; color: #334155; padding: 2px 10px; border-radius: 20px;">
                                        {{ $art->region }}
                                    </span>
                                @endif
                            </div>
                            <h3 class="article-title" style="font-size: 1.05rem; font-weight: 800; line-height: 1.45; color: #0f172a; margin-bottom: 10px;">
                                <a href="{{ route('article.detail', $art->slug) }}">{{ $art->title }}</a>
                            </h3>
                            <p class="article-excerpt" style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 18px;">
                                {{ Str::limit($art->excerpt, 150) }}
                            </p>
                            <a href="{{ route('article.detail', $art->slug) }}" class="article-link" style="color: #d97706; font-weight: 700;">
                                Baca Selengkapnya <i class="bi bi-chevron-right" style="font-size: 0.75rem;"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; color: #64748b;">
                        <i class="bi bi-journal-x" style="font-size: 3rem; color: #cbd5e1; display: block; margin-bottom: 12px;"></i>
                        Belum ada artikel yang dipublikasikan.
                    </div>
                @endforelse
            </div>

            <div style="margin-top: 40px;">
                {{ $articles->links() }}
            </div>
        </div>
    </section>

    <!-- PROGRAM BOXES (MATCHING SCREENSHOT 4 BOTTOM) -->
    <section class="section-padding" style="background-color: #f8fafc; border-top: 1px solid #e2e8f0;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Program Sertifikasi Pelatihan Fumigasi</h2>
                <p class="section-subtitle">
                    Pilih program pelatihan sesuai jenjang keahlian dan kebutuhan operasional Anda.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; max-width: 950px; margin: 0 auto;">
                @foreach($programs as $prog)
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; text-align: center;">
                        <div style="font-size: 0.68rem; font-weight: 800; color: #10b981; letter-spacing: 0.8px; text-transform: uppercase; margin-bottom: 6px;">
                            {{ $prog->badge ?? 'Sertifikasi Resmi' }}
                        </div>
                        <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">
                            {{ $prog->level_code ?? $prog->title }}
                        </h4>
                        <a href="{{ route('program.detail', $prog->slug) }}" style="font-size: 0.82rem; font-weight: 700; color: #0284c7;">
                            Lihat Program <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
