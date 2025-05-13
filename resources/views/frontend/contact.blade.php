@extends('frontend.layouts.master')

@section('content')
    @php $socialLinks = \App\Models\SocialLink::where('status', 1)->get(); @endphp

    <!-- Breadcrumb  -->
    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{ url('/') }}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> {{ __('frontend.Home') }}</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="javascript:;" class="breadcrumbs__url">{{ __('frontend.Contact') }}</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Breadcrumb  -->


    <!-- Form contact -->
    <section class="py-5" id="contact-page">
        <div class="container">
            <!-- Header Section -->
            <div class="text-center mb-5">
                <h1 class="section-title">Hubungi Kami</h1>
                <p class="lead">Silakan gunakan form berikut untuk menghubungi tim Cahaya Warisan Syekh Burhanuddin</p>
            </div>

            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4">Kirim Pesan</h3>
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Nama Lengkap" required>
                                            <label for="name">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Alamat Email" required>
                                            <label for="email">Alamat Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Subjek Pesan" required>
                                            <label for="subject">Subjek Pesan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" placeholder="Isi Pesan" style="height: 150px" required></textarea>
                                            <label for="message">Isi Pesan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-4 py-2">
                                            <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4">Informasi Kontak</h3>
                            <p class="mb-4">Tim kami siap membantu Anda. Silakan hubungi melalui informasi berikut:</p>

                            <div class="d-flex mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Alamat</h5>
                                    <p class="mb-0">Jl. Syekh Burhanuddin No. 45, Pariaman<br>Sumatera Barat, Indonesia
                                        25511</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-phone-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Telepon</h5>
                                    <p class="mb-0">
                                        <a href="tel:+62751735234" class="text-decoration-none">(0751) 735234</a><br>
                                        <a href="tel:+628127896543" class="text-decoration-none">0812-7896-543</a>
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Email</h5>
                                    <p class="mb-0">
                                        <a href="mailto:info@syekhburhanuddin.id"
                                            class="text-decoration-none">info@syekhburhanuddin.id</a><br>
                                        <a href="mailto:sekretariat@syekhburhanuddin.id"
                                            class="text-decoration-none">sekretariat@syekhburhanuddin.id</a>
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-clock fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Jam Operasional</h5>
                                    <p class="mb-0">
                                        Senin-Jumat: 08.00 - 16.00 WIB<br>
                                        Sabtu: 08.00 - 12.00 WIB<br>
                                        Ahad: Libur
                                    </p>
                                </div>
                            </div>

                            <hr class="my-4">

                            <h5 class="mb-3">Media Sosial</h5>
                            <div class="d-flex gap-3">
                                <a href="#" class="social-icon bg-facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon bg-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon bg-instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon bg-youtube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#" class="social-icon bg-telegram">
                                    <i class="fab fa-telegram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-0">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.674441154234!2d100.1208143147536!3d-0.6260359996097063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd5b0a0c8f9f1a5%3A0x1030bfbcaf71a05!2sMasjid%20Raya%20Syekh%20Burhanuddin!5e0!3m2!1sen!2sid!4v1621234567890!5m2!1sen!2sid"
                                    allowfullscreen="" loading="lazy" style="border:0;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Departments -->
            <div class="row mt-5 g-4">
                <div class="col-12">
                    <h3 class="section-title">Hubungi Divisi</h3>
                </div>

                <!-- Repeatable Card -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3 mx-auto"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-mosque fa-2x"></i>
                            </div>
                            <h5>Divisi Dakwah</h5>
                            <p class="mb-1">
                                <a href="mailto:dakwah@syekhburhanuddin.id"
                                    class="text-decoration-none">dakwah@syekhburhanuddin.id</a>
                            </p>
                            <p class="mb-0">
                                <a href="tel:+628127896541" class="text-decoration-none">0812-7896-541</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3 mx-auto"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-graduation-cap fa-2x"></i>
                            </div>
                            <h5>Divisi Pendidikan</h5>
                            <p class="mb-1">
                                <a href="mailto:pendidikan@syekhburhanuddin.id"
                                    class="text-decoration-none">pendidikan@syekhburhanuddin.id</a>
                            </p>
                            <p class="mb-0">
                                <a href="tel:+628127896542" class="text-decoration-none">0812-7896-542</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3 mx-auto"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-hand-holding-usd fa-2x"></i>
                            </div>
                            <h5>Divisi Zakat & Wakaf</h5>
                            <p class="mb-1">
                                <a href="mailto:zakat@syekhburhanuddin.id"
                                    class="text-decoration-none">zakat@syekhburhanuddin.id</a>
                            </p>
                            <p class="mb-0">
                                <a href="tel:+628127896543" class="text-decoration-none">0812-7896-543</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3 mx-auto"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-headset fa-2x"></i>
                            </div>
                            <h5>Layanan Umum</h5>
                            <p class="mb-1">
                                <a href="mailto:layanan@syekhburhanuddin.id"
                                    class="text-decoration-none">layanan@syekhburhanuddin.id</a>
                            </p>
                            <p class="mb-0">
                                <a href="tel:+628127896544" class="text-decoration-none">0812-7896-544</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Form contact  -->
@endsection
