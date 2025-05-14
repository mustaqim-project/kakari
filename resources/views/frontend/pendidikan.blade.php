


@extends('frontend.layouts.master')

@section('content')
    <!-- Pendidikan Section -->
    <section class="py-5" style="background-color: var(--card);">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="section-title">Program Pendidikan</h1>
                <p class="lead">Membangun generasi berilmu dan berakhlak mulia</p>
            </div>

            <!-- Filter Program -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="programType" class="form-label">Jenis Program</label>
                                    <select class="form-select" id="programType">
                                        <option value="all">Semua Program</option>
                                        <option value="formal">Pendidikan Formal</option>
                                        <option value="nonformal">Pendidikan Non-Formal</option>
                                        <option value="online">Program Online</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="location" class="form-label">Lokasi</label>
                                    <select class="form-select" id="location">
                                        <option value="all">Semua Lokasi</option>
                                        <option value="bandung">Bandung</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="online">Online</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="search" class="form-label">Cari Program</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="search" placeholder="Nama program...">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Daftar Program Pendidikan -->
            <div class="row g-4" id="programList">
                <!-- Program 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm program-card" data-type="formal" data-location="bandung">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top" alt="STIT Syekh Burhanuddin">
                            <div class="badge-overlay bg-primary text-white">Pendaftaran Dibuka</div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">STIT Syekh Burhanuddin</h5>
                                <span class="badge bg-success">Akreditasi B</span>
                            </div>
                            <p class="card-text text-muted small mb-3">
                                <i class="fas fa-map-marker-alt me-1"></i> Bandung, Jawa Barat
                            </p>
                            <p class="card-text">Sekolah Tinggi Ilmu Tarbiyah dengan program studi Pendidikan Agama Islam (S1) yang mengintegrasikan ilmu klasik dan modern.</p>
                            <ul class="list-unstyled small mb-3">
                                <li><i class="fas fa-check-circle text-success me-1"></i> Gelombang III: 1 Juni - 30 Juli 2023</li>
                                <li><i class="fas fa-check-circle text-success me-1"></i> Biaya: Rp 3.500.000/semester</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                            <a href="program-detail.html?id=1" class="btn btn-sm btn-outline-primary">Detail Program</a>
                            <a href="https://pendaftaran.stit-syekhburhanuddin.ac.id" target="_blank" class="btn btn-sm btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Program 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm program-card" data-type="nonformal" data-location="bandung">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top" alt="Pesantren Tahfizh">
                            <div class="badge-overlay bg-primary text-white">Beasiswa Tersedia</div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">Pesantren Tahfizh Al-Qur'an</h5>
                                <span class="badge bg-warning text-dark">Program Unggulan</span>
                            </div>
                            <p class="card-text text-muted small mb-3">
                                <i class="fas fa-map-marker-alt me-1"></i> Bandung, Jawa Barat
                            </p>
                            <p class="card-text">Program menghafal Al-Qur'an 30 juz dengan metode khusus dan bimbingan langsung dari para hafizh.</p>
                            <ul class="list-unstyled small mb-3">
                                <li><i class="fas fa-check-circle text-success me-1"></i> Pendaftaran: Buka sepanjang tahun</li>
                                <li><i class="fas fa-check-circle text-success me-1"></i> Biaya: Rp 1.200.000/bulan (full board)</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                            <a href="program-detail.html?id=2" class="btn btn-sm btn-outline-primary">Detail Program</a>
                            <a href="https://wa.me/6281234567890?text=Saya%20ingin%20mendaftar%20Pesantren%20Tahfizh" target="_blank" class="btn btn-sm btn-primary">Hubungi Kami</a>
                        </div>
                    </div>
                </div>

                <!-- Program 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm program-card" data-type="online" data-location="online">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1584697964358-3e14ca57658b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top" alt="Kajian Online">
                            <div class="badge-overlay bg-info text-white">Gratis</div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">Kelas Online Fikih Kontemporer</h5>
                                <span class="badge bg-info">Terbuka Untuk Umum</span>
                            </div>
                            <p class="card-text text-muted small mb-3">
                                <i class="fas fa-globe me-1"></i> Program Online
                            </p>
                            <p class="card-text">Pembelajaran fikih masa kini dengan pendekatan maqashid syariah untuk menjawab tantangan zaman.</p>
                            <ul class="list-unstyled small mb-3">
                                <li><i class="fas fa-check-circle text-success me-1"></i> Mulai: 15 Agustus 2023</li>
                                <li><i class="fas fa-check-circle text-success me-1"></i> Setiap Senin & Kamis, 19.30-21.00 WIB</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                            <a href="program-detail.html?id=3" class="btn btn-sm btn-outline-primary">Detail Program</a>
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar Gratis</a>
                        </div>
                    </div>
                </div>

                <!-- Program 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm program-card" data-type="formal" data-location="jakarta">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top" alt="Madrasah Aliyah">
                            <div class="badge-overlay bg-primary text-white">Kuota Terbatas</div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">Madrasah Aliyah Khusus Putra</h5>
                                <span class="badge bg-success">Akreditasi A</span>
                            </div>
                            <p class="card-text text-muted small mb-3">
                                <i class="fas fa-map-marker-alt me-1"></i> Jakarta Selatan
                            </p>
                            <p class="card-text">Pendidikan menengah atas dengan kurikulum terpadu antara ilmu agama dan umum, khusus untuk santri putra.</p>
                            <ul class="list-unstyled small mb-3">
                                <li><i class="fas fa-check-circle text-success me-1"></i> Pendaftaran: 1 Mei - 30 Juni 2023</li>
                                <li><i class="fas fa-check-circle text-success me-1"></i> Biaya: Rp 2.500.000/bulan (termasuk asrama)</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                            <a href="program-detail.html?id=4" class="btn btn-sm btn-outline-primary">Detail Program</a>
                            <a href="madrasah-daftar.html" class="btn btn-sm btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Program 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm program-card" data-type="nonformal" data-location="bandung">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top" alt="Program Tahfizh Kilat">
                            <div class="badge-overlay bg-warning text-dark">Baru</div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">Program Tahfizh Kilat 3 Bulan</h5>
                                <span class="badge bg-danger">Intensif</span>
                            </div>
                            <p class="card-text text-muted small mb-3">
                                <i class="fas fa-map-marker-alt me-1"></i> Bandung, Jawa Barat
                            </p>
                            <p class="card-text">Program khusus untuk menghafal 5 juz Al-Qur'an dalam 3 bulan dengan metode khusus dan bimbingan intensif.</p>
                            <ul class="list-unstyled small mb-3">
                                <li><i class="fas fa-check-circle text-success me-1"></i> Angkatan berikutnya: 1 September 2023</li>
                                <li><i class="fas fa-check-circle text-success me-1"></i> Biaya: Rp 4.500.000 (termasuk modul & sertifikat)</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                            <a href="program-detail.html?id=5" class="btn btn-sm btn-outline-primary">Detail Program</a>
                            <a href="#" class="btn btn-sm btn-primary">Pendaftaran Online</a>
                        </div>
                    </div>
                </div>

                <!-- Program 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm program-card" data-type="online" data-location="online">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                 class="card-img-top" alt="Sekolah Tahfizh Online">
                            <div class="badge-overlay bg-success text-white">Terpopuler</div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">Sekolah Tahfizh Online</h5>
                                <span class="badge bg-info">Fleksibel</span>
                            </div>
                            <p class="card-text text-muted small mb-3">
                                <i class="fas fa-globe me-1"></i> Program Online
                            </p>
                            <p class="card-text">Program menghafal Al-Qur'an secara online dengan bimbingan personal dari ustadz/ustadzah berpengalaman.</p>
                            <ul class="list-unstyled small mb-3">
                                <li><i class="fas fa-check-circle text-success me-1"></i> Mulai kapan saja</li>
                                <li><i class="fas fa-check-circle text-success me-1"></i> Biaya: Rp 350.000/bulan</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                            <a href="program-detail.html?id=6" class="btn btn-sm btn-outline-primary">Detail Program</a>
                            <a href="https://tahfizhonline.syekhburhanuddin.id" target="_blank" class="btn btn-sm btn-primary">Mulai Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Program pagination" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

            <!-- Program Unggulan -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card bg-primary text-white overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5">
                                    <h2 class="card-title text-white">Program Tuanku Sarjana</h2>
                                    <p class="card-text">Beasiswa penuh untuk mahasiswa berprestasi dari keluarga kurang mampu yang ingin menempuh pendidikan di STIT Syekh Burhanuddin.</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Pembebasan biaya pendidikan 100%</li>
                                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Tunjangan hidup bulanan</li>
                                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Bimbingan khusus dari ulama</li>
                                        <li><i class="fas fa-check-circle me-2"></i> Pelatihan keterampilan tambahan</li>
                                    </ul>
                                    <div class="mt-4">
                                        <a href="#" class="btn btn-light btn-lg me-2">Syarat Pendaftaran</a>
                                        <a href="#" class="btn btn-outline-light btn-lg">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                     class="img-fluid h-100" style="object-fit: cover;" alt="Program Tuanku Sarjana">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Pendaftaran -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Pendaftaran Kelas Online</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="fullName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Nomor WhatsApp</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="program" class="form-label">Program yang Dipilih</label>
                                <select class="form-select" id="program" required>
                                    <option value="">Pilih Program</option>
                                    <option value="Kelas Online Fikih Kontemporer">Kelas Online Fikih Kontemporer</option>
                                    <option value="Sekolah Tahfizh Online">Sekolah Tahfizh Online</option>
                                    <option value="Program Tahfizh Kilat">Program Tahfizh Kilat</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Pertanyaan atau Pesan</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                    <label class="form-check-label" for="agreeTerms">
                                        Saya menyetujui syarat dan ketentuan yang berlaku
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Kirim Pendaftaran</button>
                </div>
            </div>
        </div>
    </div>

@endsection
