@extends('layouts.user')

@section('header')
    <style>
        .full-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px;
        }

        #hero {
            background: url('{{ asset('user/images/hero-bg.jpg') }}') top center;
        }

        .image-center {
            display: block;
            margin-left: 6.5px;
            margin-right: 6.5px;
            width: 100%;
        }
    </style>
@endsection

@section('hero')
    <h1>Selamat Datang Di Jait Oya</h1>
    <h2>Kami siap membantu kebutuhan pakaian anda dari pembuatan baru <br>hingga permak pakaian kesayangan Anda.</h2>
    <a href="#about" class="btn-get-started">Get Started</a>
@endsection


@section('content')
    <!--========================== About Us Section ============================-->
    <section id="about">
        <div class="container">
            <div class="row about-container">

                <div class="col-lg-7 content order-lg-1 order-2">
                    <h2 class="title">Tentang Kami</h2>
                    <p> {!! $about[0]->caption !!}</p>
                </div>

                <div class="col-lg-5 background order-lg-2 order-1 wow fadeInRight"
                    style="background: url('{{ asset('about_image/' . $about[0]->image) }}') center top no-repeat; background-size: cover;">
                </div>
            </div>

        </div>
    </section>

    <!--========================== Services Section ============================-->
    <section id="services">
        <div class="container wow fadeIn">
            <div class="section-header">
                <h3 class="section-title">Mengapa Memilih Kami?</h3>
                <p class="section-description">Kami menghadirkan layanan terbaik dengan keunggulan berikut</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                        <h4 class="title">Kerapian Jahitan</h4>
                        <p class="description">Setiap jahitan dikerjakan dengan detail dan ketelitian tinggi untuk hasil
                            yang rapi dan tahan lama.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box">
                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                        <h4 class="title">Proses Cepat</h4>
                        <p class="description">Kami memahami kebutuhan Anda akan kecepatan, tanpa mengorbankan kualitas
                            hasil akhir.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <h4 class="title">Harga Terjangkau</h4>
                        <p class="description">Layanan berkualitas tinggi dengan harga yang tetap ramah di kantong
                            pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    </section><!-- #services -->

    <!--========================== Call To Action Section ============================-->
    <section id="call-to-action">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Wujudkan Baju Impianmu & Perbaiki Pakaian Favoritmu Hari Ini</h3>
                    <p class="cta-text">
                        Kami siap membantu Anda menjahit pakaian baru sesuai keinginan, atau memperbaiki pakaian lama agar
                        nyaman kembali digunakan. Percayakan pada keahlian kami untuk hasil jahitan yang rapi, cepat, dan
                        memuaskan.
                    </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="/contact">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!--========================== category Section ============================-->
    <section id="category">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Gallery</h3>
                <p class="section-description"> Lihat hasil karya jahitan kami, mulai dari pakaian baru hingga permak yang
                    rapi dan memuaskan.
                </p>
            </div>
            <div class="row">

                <div class="row" id="category-wrapper">
                    @foreach ($categories as $category)
                        <div class="col-md-4 col-sm-12 category-item filter-app">
                            <a>
                                <img src="{{ asset('category_image/' . $category->image) }}" class="image-center">
                                <div class="details">
                                    <h4>{{ $category->name }}</h4>
                                    <span>{{ $category->description }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
    </section>

    <!--========================== Gallery Section ============================-->
    {{-- <section id="contact" style="padding-bottom:85px">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Galeri</h3>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque</p>
            </div>
        </div>

        <div class="container wow fadeInUp">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-4">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 full-img"
                            style="background-image: url({{ asset('user/images/gallery/prambanan.png') }})">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 full-img"
                            style="background-image: url({{ asset('user/images/gallery/wisata2.png') }})">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 full-img"
                            style="background-image: url({{ asset('user/images/gallery/wisata3.png') }})">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 full-img"
                            style="background-image: url({{ asset('user/images/gallery/wisata4.png') }})">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 full-img"
                            style="background-image: url({{ asset('user/images/gallery/wisata5.png') }})">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 full-img"
                            style="background-image: url({{ asset('user/images/gallery/wisata6.png') }})">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 full-img"
                            style="background-image: url({{ asset('user/images/gallery/wisata7.png') }})">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 full-img"
                            style="background-image: url({{ asset('user/images/gallery/wisata8.png') }})">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}
@endsection
