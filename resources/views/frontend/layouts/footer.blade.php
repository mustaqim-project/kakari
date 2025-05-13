<!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                {{-- Kolom 1: Deskripsi dan Sosial Media --}}
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <figure class="image-logo">
                        <img src="{{ asset(@$footerInfo->logo) }}" alt="ic-syekhburhanuddin Logo"
                            class="img-fluid loaded" loading="lazy">
                    </figure>
                    <p>{{ @$footerInfo->description ?? 'Menebar rahmat melalui dakwah yang santun dan ilmu yang bermanfaat.' }}
                    </p>
                    <div class="mt-3">
                        @foreach ($socialLinks as $link)
                            <a href="{{ $link->url }}" class="social-icon" aria-label="{{ $link->name }}">
                                <i class="{{ $link->icon }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Kolom 2: Navigasi --}}
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>{{ @$footerGridOneTitle->value ?? 'Navigasi' }}</h5>
                    <div class="footer-links">
                        @foreach ($footerGridOne as $item)
                            <a href="{{ $item->url }}">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Kolom 3: Layanan --}}
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>{{ @$footerGridTwoTitle->value ?? 'Layanan' }}</h5>
                    <div class="footer-links">
                        @foreach ($footerGridTwo as $item)
                            <a href="{{ $item->url }}">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Kolom 4: Kontak --}}
                <div class="col-lg-3 col-md-6">
                    <h5>Kontak Kami</h5>
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i> {{ @$contact->address }}
                        <br>
                        <i class="fas fa-phone-alt me-2 mt-2"></i> <a
                            href="tel:{{ @$contact->phone }}">{{ @$contact->phone }}</a>
                        <br>
                        <i class="fas fa-envelope me-2 mt-2"></i>
                        <a href="mailto:{{ @$contact->email }}">{{ @$contact->email }}</a>

                    </p>


                </div>


            </div>

            <hr class="mt-4" style="border-color: var(--border);">
            <div class="text-center pt-3">
                <p class="mb-0">
                    {{ @$footerInfo->copyright ?? '© ' . now()->year . ' Cahaya Warisan Syekh Burhanuddin. All rights reserved.' }}
                </p>
            </div>
        </div>
    </footer>
