@extends('frontend.layouts.master')

@section('content')
    <!-- Donasi Section -->
    <section id="donasi" class="py-5" style="background-color: var(--primary); color: white;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-white">Salurkan Donasi Anda</h2>
                <p class="lead">Bersama membangun kebaikan melalui dukungan Anda</p>
            </div>

            <div class="row">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4"><i class="fas fa-university me-2"></i>Transfer Bank</h3>
                        <p class="card-text mb-4">Anda dapat mentransfer donasi ke rekening berikut:</p>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Bank</th>
                                        <th>Nomor Rekening</th>
                                        <th>Atas Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donasi as $item)
                                        <tr>
                                            <td>{{ $item->bank }}</td>
                                            <td>{{ $item->nomor_rekening }}</td>
                                            <td>{{ $item->atas_nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        <div class="alert alert-info mt-4">
                            <h5><i class="fas fa-info-circle me-2"></i>Catatan Penting:</h5>
                            <ul class="mb-0">
                                <li>Konfirmasi donasi bisa dilakukan dengan mengirim bukti transfer ke
                                    <strong>email@contoh.com</strong> atau WhatsApp ke
                                    <strong>+6281234567890</strong>
                                </li>
                                <li>Setiap donasi akan kami publikasikan (jika diizinkan) sebagai bentuk
                                    transparansi</li>
                                <li>Donasi dapat dikurangkan dari penghasilan bruto untuk keperluan pajak (sesuai
                                    peraturan yang berlaku)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <div class="p-4 rounded" style="background-color: rgba(255,255,255,0.1);">
                    <h4><i class="fas fa-hands-helping me-2"></i>Terima kasih atas kebaikan dan dukungan Anda!</h4>
                    <p class="mb-0">Setiap rupiah yang Anda donasikan akan membantu perkembangan dakwah dan pendidikan
                        umat</p>
                </div>
            </div>
        </div>
    </section>
@endsection
