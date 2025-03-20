@extends('user.layouts.main')

@section('content')
    <section class="d-flex justify-content-center align-items-center" id="hero" style="height: 100vh">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-sm-12 col-md-6">
                    <h1 class="fw-bold text-center text-md-start text-hero-up poppins-font">Membuat Masakan Dengan <span style="color: #F93827">Cinta</span>💝</h1>
                    <a href="https://wa.me/6285333122279" target="_blank" class="btn mt-2 fw-semibold rounded-3 px-4 py-2 btn-hero-pesan shadow-border">Pesan Sekarang</a>
                    <a href="#menu" class="btn mt-2 fw-semibold rounded-3 px-4 py-2 ms-md-2 btn-hero-menu shadow-border">Lihat Menu</a>
                </div>
                <div class="col-sm-12 col-md-6">
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5" id="about_us" style="background-color: var(--kuning)">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-sm-12 col-md-6">
                    
                </div>
                <div class="col-sm-12 col-md-6">
                    <h2 class="fw-semibold text-center">Mengenai Kami</h2>
                    <h5 class="text-center"><span style="color: var(--merah)">Pawonada</span> - Dari dapur rumahan untuk anda</h5>
                    <div class="card p-4 rounded-3 mt-4 shadow-border">
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
            <h2 class="fw-semibold text-center text-light">Keunggulan Kami</h2>

            <div class="row d-flex justify-content-center mt-4">
                <div class="col-6 col-md-3">
                    <div class="card border border-2 border-dark p-3 py-5 text-center mt-3 shadow-border card-keunggulan">
                        <i class="fa-solid fa-bowl-food" style="font-size: 5rem"></i>
                        <h5 class="poppins-font mt-3">Sehat & Lezat</h5>
                        <p>Dibuat dari bahan pilihan tanpa pengawet.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border border-2 border-dark p-3 py-5 text-center mt-3 shadow-border card-keunggulan">
                        <i class="fa-solid fa-receipt" style="font-size: 5rem"></i>
                        <h5 class="poppins-font mt-3">Resep Autentik</h5>
                        <p>Cita rasa khas rumahan yang tak terlupakan.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border border-2 border-dark p-3 py-5 text-center mt-3 shadow-border card-keunggulan">
                        <i class="fa-solid fa-list-check" style="font-size: 5rem"></i>
                        <h5 class="poppins-font mt-3">Beragam Menu</h5>
                        <p>Pilihan menu dari masakan Nusantara hingga modern.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card border border-2 border-dark p-3 py-5 text-center mt-3 shadow-border card-keunggulan">
                        <i class="fa-solid fa-money-bill-wave" style="font-size: 5rem"></i>
                        <h5 class="poppins-font mt-3">Harga Terjangkau</h5>
                        <p>Nikmati hidangan berkualitas tanpa menguras kantong.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="menu">
        <div class="container-xxl p-5">
            <h2 class="fw-semibold text-center">Menu Populer</h2>

            <div class="row d-flex justify-content-center mt-4">
                <div class="col-12 col-md-4 mt-2">
                    <img src="https://www.homade.id/wp-content/uploads/2020/05/menu-ayam-geprek.jpg" class="img-fluid" alt="">
                    <h4 class="text-center mt-2">Ayam Enak</h4>
                </div>
                <div class="col-12 col-md-4 mt-2">
                    <img src="https://www.homade.id/wp-content/uploads/2020/05/menu-ayam-geprek.jpg" class="img-fluid" alt="">
                    <h4 class="text-center mt-2">Ayam Enak</h4>
                </div>
                <div class="col-12 col-md-4 mt-2">
                    <img src="https://www.homade.id/wp-content/uploads/2020/05/menu-ayam-geprek.jpg" class="img-fluid" alt="">
                    <h4 class="text-center mt-2">Ayam Enak</h4>
                </div>
            </div>

            <a href="" class="btn px-3 py-2 shadow-border text-light border border-2 border-dark mt-3" style="background-color: var(--merah)">Lihat menu lainnya...</a>
        </div>
    </section>

    <section id="testimoni" style="background-color: var(--merah)">
        <div class="container-xxl p-5">
            <h2 class="text-center text-light">Testimoni Pelanggan</h2>

            <div class="owl-carousel mt-4">
                <div class="item">
                    <div class="card p-4" style="height: auto">
                        <h5 class="fw-bold">Jesica Iskandar</h5>
                        <p class="fst-italic poppins-font">"Masakannya enak, bumbunya nagih bangeetttt"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Suromulang</p>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-4" style="height: auto">
                        <h5 class="fw-bold">Andi Wijaya</h5>
                        <p class="fst-italic poppins-font">"Pelayanan cepat dan ramah, makanannya lezat"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Merdeka</p>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-4" style="height: auto">
                        <h5 class="fw-bold">Siti Nurhaliza</h5>
                        <p class="fst-italic poppins-font">"Rasa masakannya seperti masakan ibu di rumah"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Kebon Jeruk</p>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-4" style="height: auto">
                        <h5 class="fw-bold">Budi Santoso</h5>
                        <p class="fst-italic poppins-font">"Harga terjangkau, kualitas top"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Sudirman</p>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-4" style="height: auto">
                        <h5 class="fw-bold">Rina Susanti</h5>
                        <p class="fst-italic poppins-font">"Menu beragam, semuanya enak"</p>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>Jl. Gatot Subroto</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection