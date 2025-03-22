@extends('user.layouts.main')

@section('content')
    <section class="d-flex justify-content-center align-items-center" id="hero" style="height: 100vh">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-sm-12 col-md-6 px-5 order-2 order-md-1"
                    data-aos="fade-up"
                    data-aos-duration="450">
                    <h1 class="fw-bold text-center text-md-start text-hero-up pstp-font">Membuat Masakan Dengan <span style="color: #F93827">Cinta</span>💝</h1>
                    <a href="https://wa.me/6285333122279" target="_blank" class="btn rounded-0 mt-2 fw-semibold px-4 py-2 btn-hero-pesan btn-hover animation-floating shadow-border">Pesan Sekarang</a>
                    <a href="#menu" class="btn rounded-0 mt-2 fw-semibold  px-4 py-2 ms-md-2 btn-hero-menu btn-hover shadow-border">Lihat Menu</a>
                </div>
                <div class="col-sm-12 col-md-6 order-1 order-md-2 p-4">
                    <div class="card rounded-0 img-hero-up shadow-border w-100 ratio ratio-4x3" 
                        data-aos="fade-right" data-aos-duration="450">
                        <img src="{{ asset('img/assets/gurami_bakar.jpg') }}" class="object-fit-cover rotate-animation" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5" id="about_us" style="background-color: var(--kuning)">
        <div class="container-fluid py-5"
            data-aos="fade-up"
            data-aos-anchor="#about_us"
            data-aos-offset="250"
            data-aos-duration="450">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                    <div class="rotating-box"></div>
                </div>
                <div class="col-sm-12 col-md-6 px-md-5">
                    <h2 class="fw-semibold text-center pstp-font animation-floating">Mengenai Kami</h2>
                    <h5 class="text-center"><span style="color: var(--merah)">Pawonada</span> - Dari dapur rumahan untuk anda</h5>
                    <div class="card rounded-0 p-4 mt-4 shadow-border">
                        <p>
                            Pawonada hadir untuk menghadirkan cita rasa masakan rumahan yang autentik, 
                            sehat, dan lezat. Kami percaya bahwa makanan bukan sekadar santapan, 
                            tetapi juga membawa kehangatan dan kebersamaan di setiap hidangan. Dengan menggunakan bahan-bahan 
                            segar pilihan dan bumbu tradisional khas, kami menjaga kualitas rasa yang selalu konsisten, 
                            seperti masakan ibu di rumah.
                        </p>
                        <p>
                            Kami siap menyajikan berbagai hidangan spesial yang cocok untuk berbagai momen istimewa, 
                            mulai dari makan keluarga sehari-hari, acara kantor, arisan, hingga perayaan besar. 
                            Dengan sentuhan kasih sayang dalam setiap masakan, Pawonada berkomitmen untuk memberikan pengalaman 
                            kuliner yang tak hanya memanjakan lidah, tetapi juga menghadirkan nostalgia kelezatan masakan
                            rumahan yang selalu dirindukan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5" id="why_us" style="background-color: var(--hijau)">
        <div class="container py-5">
            <h2 class="fw-semibold text-center text-light pstp-font animation-floating">Keunggulan Kami</h2>

            <div class="row d-flex justify-content-center mt-4">
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="450">
                    <div class="card rounded-0 border border-2 border-dark p-3 py-5 text-center mt-3 shadow-border card-keunggulan">
                        <i class="fa-solid fa-bowl-food rotate-animation" style="font-size: 5rem"></i>
                        <h5 class="poppins-font mt-3">Sehat & Lezat</h5>
                        <p>Dibuat dari bahan pilihan tanpa pengawet.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="450">
                    <div class="card rounded-0 border border-2 border-dark p-3 py-5 text-center mt-3 shadow-border card-keunggulan">
                        <i class="fa-solid fa-receipt rotate-animation" style="font-size: 5rem"></i>
                        <h5 class="poppins-font mt-3">Resep Autentik</h5>
                        <p>Cita rasa khas rumahan yang tak terlupakan.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="450">
                    <div class="card rounded-0 border border-2 border-dark p-3 py-5 text-center mt-3 shadow-border card-keunggulan">
                        <i class="fa-solid fa-list-check rotate-animation" style="font-size: 5rem"></i>
                        <h5 class="poppins-font mt-3">Beragam Menu</h5>
                        <p>Pilihan menu dari masakan Nusantara hingga modern.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="450">
                    <div class="card rounded-0 border border-2 border-dark p-3 py-5 text-center mt-3 shadow-border card-keunggulan">
                        <i class="fa-solid fa-money-bill-wave rotate-animation" style="font-size: 5rem"></i>
                        <h5 class="poppins-font mt-3">Harga Terjangkau</h5>
                        <p>Nikmati hidangan berkualitas tanpa menguras kantong.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="menu">
        <div class="container-xxl p-5">
            <h2 class="fw-semibold text-center pstp-font animation-floating">Menu Populer</h2>

            <div class="row d-flex justify-content-center mt-4">
                <div class="col-12 col-md-4 mt-2" data-aos="fade-down" data-aos-duration="450" data-aos-anchor="#menu" data-aos-offset="250">
                    <img src="https://www.homade.id/wp-content/uploads/2020/05/menu-ayam-geprek.jpg" class="img-fluid shadow-border rotate-animation" alt="">
                    <h4 class="text-center mt-2">Ayam Enak</h4>
                </div>
                <div class="col-12 col-md-4 mt-2" data-aos="fade-down" data-aos-duration="450" data-aos-anchor="#menu" data-aos-offset="250">
                    <img src="https://www.homade.id/wp-content/uploads/2020/05/menu-ayam-geprek.jpg" class="img-fluid shadow-border rotate-animation" alt="">
                    <h4 class="text-center mt-2">Ayam Enak</h4>
                </div>
                <div class="col-12 col-md-4 mt-2" data-aos="fade-down" data-aos-duration="450" data-aos-anchor="#menu" data-aos-offset="250">
                    <img src="https://www.homade.id/wp-content/uploads/2020/05/menu-ayam-geprek.jpg" class="img-fluid shadow-border rotate-animation" alt="">
                    <h4 class="text-center mt-2">Ayam Enak</h4>
                </div>
            </div>

            <a href="{{ route('user.menu') }}" class="btn rounded-0 px-3 py-2 shadow-border btn-hover text-light border border-2 border-dark mt-3" style="background-color: var(--merah)">Lihat menu lainnya...</a>
        </div>
    </section>

    <section id="testimoni" style="background-color: var(--merah)">
        <div class="container-xxl p-5">
            <h2 class="text-center text-light pstp-font animation-floating">Testimoni Pelanggan</h2>

            <div class="owl-carousel mt-4">
                <div class="item mb-1">
                    <div class="card rounded-0 p-4 shadow-border w-100 d-flex flex-column">
                        <h5 class="fw-bold">Jesica Iskandar</h5>
                        <p class="fst-italic poppins-font">"Masakannya enak, bumbunya nagih bangeetttt"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Suromulang</p>
                    </div>
                </div>
                <div class="item mb-1">
                    <div class="card rounded-0 p-4 shadow-border w-100 d-flex flex-column">
                        <h5 class="fw-bold">Andi Wijaya</h5>
                        <p class="fst-italic poppins-font">"Pelayanan cepat dan ramah, makanannya lezat"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Merdeka</p>
                    </div>
                </div>
                <div class="item mb-1">
                    <div class="card rounded-0 p-4 shadow-border w-100 d-flex flex-column">
                        <h5 class="fw-bold">Siti Nurhaliza</h5>
                        <p class="fst-italic poppins-font">"Rasa masakannya seperti masakan ibu di rumah"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Kebon Jeruk</p>
                    </div>
                </div>
                <div class="item mb-1">
                    <div class="card rounded-0 p-4 shadow-border w-100 d-flex flex-column">
                        <h5 class="fw-bold">Nada Rania</h5>
                        <p class="fst-italic poppins-font">"Porsi pas!!"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Kebon Jeruk</p>
                    </div>
                </div>
            </div>            
        </div>
    </section>
@endsection