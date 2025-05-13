


@extends('frontend.layouts.master')

@section('content')
 <!-- About Us Section -->
    <section class="py-5" id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="position-relative">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Masjid_Raya_Syekh_Burhanuddin_2020_01.jpg/960px-Masjid_Raya_Syekh_Burhanuddin_2020_01.jpg"
                            class="img-fluid rounded shadow-lg" alt="Syekh Burhanuddin"
                            style="max-height: 500px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 bg-primary text-white p-3 rounded-end"
                            style="width: 80%;">
                            <h4 class="mb-0">"Mewarisi Cahaya, Menebar Hikmah"</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mb-4">Tentang Kami</h2>
                    <p class="lead">Cahaya Warisan Syekh Burhanuddin adalah platform dakwah digital yang berkomitmen
                        untuk melestarikan dan menyebarkan warisan keilmuan ulama Minangkabau khususnya Syekh
                        Burhanuddin dan para penerusnya.</p>

                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fas fa-mosque fa-lg"></i>
                            </div>
                        </div>
                        <div>
                            <h5>Sejarah</h5>
                            <p>Berdiri sejak 2010, kami merupakan lembaga yang melanjutkan tradisi keilmuan Surau Syekh
                                Burhanuddin di Pariaman, Sumatera Barat.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="fas fa-bullseye fa-lg"></i>
                            </div>
                        </div>
                        <div>
                            <h5>Visi</h5>
                            <p>Menjadi pusat rujukan digital untuk pelestarian dan pengembangan warisan keulamaan Syekh
                                Burhanuddin yang rahmatan lil 'alamin.</p>
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary me-2">Lihat Profil Lengkap</a>
                    <a href="#" class="btn btn-outline-primary">Tim Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5 bg-light" style="background-color: var(--card) !important;">
        <div class="container">
            <h2 class="section-title text-center mb-5">Misi Kami</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3 mx-auto"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-book fa-2x"></i>
                            </div>
                            <h5>Pelestarian</h5>
                            <p>Mendokumentasikan dan menyebarkan karya-karya ulama tradisi Minangkabau khususnya Syekh
                                Burhanuddin</p>
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
                            <h5>Pendidikan</h5>
                            <p>Mengembangkan sistem pendidikan Islam berbasis tradisi surau dan pesantren dengan
                                pendekatan kontemporer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3 mx-auto"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h5>Dakwah</h5>
                            <p>Menyajikan konten dakwah kreatif yang mengedepankan nilai-nilai Ahlussunnah wal Jama'ah
                                yang moderat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3 mx-auto"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-hands-helping fa-2x"></i>
                            </div>
                            <h5>Pengabdian</h5>
                            <p>Mengembangkan program pemberdayaan masyarakat berbasis zakat, wakaf, dan ekonomi syariah
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Nilai-Nilai Kami</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body text-center">
                                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded mb-3 mx-auto"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i class="fas fa-hand-holding-heart fa-lg"></i>
                                    </div>
                                    <h5 class="mb-3">Rahmatan Lil 'Alamin</h5>
                                    <p>Mengajarkan Islam sebagai agama yang membawa rahmat bagi seluruh alam semesta</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body text-center">
                                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded mb-3 mx-auto"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i class="fas fa-balance-scale fa-lg"></i>
                                    </div>
                                    <h5 class="mb-3">Tawassuth</h5>
                                    <p>Berpegang pada prinsip moderasi dan keseimbangan dalam beragama</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body text-center">
                                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded mb-3 mx-auto"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i class="fas fa-book-open fa-lg"></i>
                                    </div>
                                    <h5 class="mb-3">Itqan</h5>
                                    <p>Bersungguh-sungguh dalam menjaga tradisi keilmuan yang otentik</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body text-center">
                                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded mb-3 mx-auto"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i class="fas fa-heart fa-lg"></i>
                                    </div>
                                    <h5 class="mb-3">Tasamuh</h5>
                                    <p>Mengembangkan sikap toleransi dan menghargai perbedaan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body text-center">
                                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded mb-3 mx-auto"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i class="fas fa-lightbulb fa-lg"></i>
                                    </div>
                                    <h5 class="mb-3">Ijtihad</h5>
                                    <p>Terbuka terhadap pembaruan dengan tetap berpegang pada prinsip dasar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body text-center">
                                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded mb-3 mx-auto"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i class="fas fa-people-arrows fa-lg"></i>
                                    </div>
                                    <h5 class="mb-3">Silaturahmi</h5>
                                    <p>Menjaga dan memperkuat jaringan keilmuan dan ukhuwah islamiyah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light" style="background-color: var(--card) !important;">
        <div class="container">
            <h2 class="section-title text-center mb-5">Pengurus Inti</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 text-center">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                            class="card-img-top rounded-circle mx-auto mt-3" alt="Team Member"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Prof. Dr. H. Ahmad Syafii</h5>
                            <p class="text-muted">Ketua Dewan Syariah</p>
                            <p class="card-text">Guru Besar UIN Imam Bonjol Padang dan ahli waris keilmuan Syekh
                                Burhanuddin</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 text-center">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                            class="card-img-top rounded-circle mx-auto mt-3" alt="Team Member"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Dr. H. Muhammad Zain</h5>
                            <p class="text-muted">Direktur Eksekutif</p>
                            <p class="card-text">Doktor Tasawuf dan Tarekat dari Universitas Al-Azhar Kairo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 text-center">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                            class="card-img-top rounded-circle mx-auto mt-3" alt="Team Member"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Ust. Abdul Hakim, M.Ag</h5>
                            <p class="text-muted">Ketua Divisi Dakwah</p>
                            <p class="card-text">Alumni Pondok Pesantren Darussalam Parak Laweh dan ahli fikih
                                kontemporer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 text-center">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                            class="card-img-top rounded-circle mx-auto mt-3" alt="Team Member"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Hj. Nurhayati, M.Pd.I</h5>
                            <p class="text-muted">Ketua Divisi Pendidikan</p>
                            <p class="card-text">Pakar pendidikan Islam dan pengasuh Pesantren Putri Cahaya Ilmu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary px-4">Lihat Seluruh Tim</a>
            </div>
        </div>
    </section>
@endsection
