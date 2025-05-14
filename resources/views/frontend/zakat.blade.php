@extends('frontend.layouts.master')

@section('content')
    <!-- Zakat & Wakaf Section -->
    <section class="py-5" style="background-color: var(--card);">
        <div class="container">
            <h2 class="text-center mb-5 section-title">Zakat & Wakaf</h2>

            <div class="row g-4">
                <!-- Edukasi Zakat & Wakaf -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-graduation-cap me-2"></i>Edukasi Zakat & Wakaf</h4>
                        </div>
                        <div class="card-body">
                            <p>Memahami makna dan pentingnya zakat serta wakaf dalam Islam melalui berbagai materi
                                edukasi:</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Panduan
                                    Lengkap Zakat Fitrah & Mal</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Hikmah
                                    dan Keutamaan Wakaf</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Fiqh
                                    Zakat Kontemporer</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Kisah
                                    Inspiratif Wakaf Produktif</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary">Pelajari Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Kalkulator Zakat -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-calculator me-2"></i>Kalkulator Zakat</h4>
                        </div>
                        <div class="card-body">
                            <p>Hitung kewajiban zakat Anda dengan mudah menggunakan kalkulator zakat kami:</p>
                            <div class="mb-3">
                                <label class="form-label">Jenis Zakat</label>
                                <select class="form-select" id="jenisZakat">
                                    <option value="penghasilan">Zakat Penghasilan (2.5%)</option>
                                    <option value="emas">Zakat Emas/Perak (2.5%)</option>
                                    <option value="perdagangan">Zakat Perdagangan (2.5%)</option>
                                    <option value="pertanian">Zakat Pertanian (5% - 10%)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Harta/Penghasilan</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="jumlahHarta"
                                        placeholder="Masukkan jumlah">
                                </div>
                            </div>
                            <button class="btn btn-primary w-100" id="hitungZakat">Hitung Zakat</button>
                            <div class="alert alert-success mt-3 d-none" id="zakatResult"></div>
                        </div>
                    </div>
                </div>

                <!-- Program Pemberdayaan Umat -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-hands-helping me-2"></i>Program Pemberdayaan Umat</h4>
                        </div>
                        <div class="card-body">
                            <p>Dana zakat dan wakaf Anda akan disalurkan untuk berbagai program pemberdayaan:</p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-3 border rounded bg-light">
                                        <h6><i class="fas fa-school text-primary me-2"></i>Pendidikan</h6>
                                        <small>Beasiswa santri, pembangunan madrasah, dan pelatihan keterampilan</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 border rounded bg-light">
                                        <h6><i class="fas fa-heartbeat text-primary me-2"></i>Kesehatan</h6>
                                        <small>Klinik gratis, ambulans wakaf, dan bantuan pengobatan</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 border rounded bg-light">
                                        <h6><i class="fas fa-utensils text-primary me-2"></i>Ekonomi</h6>
                                        <small>Modal usaha, pelatihan wirausaha, dan koperasi syariah</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 border rounded bg-light">
                                        <h6><i class="fas fa-mosque text-primary me-2"></i>Dakwah</h6>
                                        <small>Pembangunan masjid, pengadaan kitab, dan dakwah komunitas</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Donasi & Kolaborasi -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-hand-holding-heart me-2"></i>Donasi & Kolaborasi</h4>
                        </div>
                        <div class="card-body">
                            <p>Salurkan zakat, infaq, sedekah, atau wakaf Anda melalui berbagai channel:</p>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <button class="btn btn-outline-primary"><i class="fas fa-qrcode me-2"></i>QRIS</button>
                                <button class="btn btn-outline-primary"><i class="fab fa-gopuram me-2"></i>Bank
                                    Syariah</button>
                                <button class="btn btn-outline-primary"><i class="fas fa-wallet me-2"></i>Dompet
                                    Digital</button>
                                <button class="btn btn-outline-primary"><i class="fas fa-store me-2"></i>Kantor
                                    Kami</button>
                            </div>
                            <hr>
                            <h5 class="mb-3">Kolaborasi Program</h5>
                            <p>Untuk kerjasama program pemberdayaan atau wakaf produktif, silakan hubungi:</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-phone-alt text-primary me-3"></i>
                                <span>+62 812 3456 7890 (Zakat Center)</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <span>zakat@syekhburhanuddin.id</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('hitungZakat').addEventListener('click', function() {
            const jenis = document.getElementById('jenisZakat').value;
            const jumlah = parseFloat(document.getElementById('jumlahHarta').value);
            const resultDiv = document.getElementById('zakatResult');

            if (isNaN(jumlah) || jumlah <= 0) {
                alert('Masukkan jumlah yang valid');
                resultDiv.classList.add('d-none');
                return;
            }

            let persen = 0.025; // default

            if (jenis === 'pertanian') {
                persen = jumlah >= 522 ? 0.10 : 0.05; // misalnya >522 kg hasil panen = 10%, sisanya 5%
            }

            const zakat = jumlah * persen;

            resultDiv.innerHTML =
                `Zakat yang harus Anda bayar: <strong>Rp ${zakat.toLocaleString('id-ID')}</strong>`;
            resultDiv.classList.remove('d-none');
        });
    </script>
@endsection
