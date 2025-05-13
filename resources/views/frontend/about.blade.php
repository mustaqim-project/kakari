@extends('frontend.layouts.master')

@section('content')
    <!-- About Us Section -->
    <section class="py-5" id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="position-relative">
                        @if ($about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid rounded shadow-lg"
                                alt="About Image" style="max-height: 500px; object-fit: cover;">
                        @else
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Masjid_Raya_Syekh_Burhanuddin_2020_01.jpg/960px-Masjid_Raya_Syekh_Burhanuddin_2020_01.jpg"
                                class="img-fluid rounded shadow-lg" alt="Syekh Burhanuddin"
                                style="max-height: 500px; object-fit: cover;">
                        @endif
                        <div class="position-absolute bottom-0 start-0 bg-primary text-white p-3 rounded-end"
                            style="width: 80%;">
                            <h4 class="mb-0">"Mewarisi Cahaya, Menebar Hikmah"</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mb-4">Tentang Kami</h2>
                    <div class="about-content">
                        {!! $about->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-5 bg-light" style="background-color: var(--card) !important;">
        <div class="container">
            <h2 class="section-title text-center mb-5">Pengurus</h2>

            <div class="team-slider">
                @foreach ($penguruses as $pengurus)
                    <div class="px-2"> <!-- Padding untuk gap -->
                        <div class="card h-100 border-0 text-center mx-2"> <!-- Margin untuk card -->
                            @if ($pengurus->image)
                                <img src="{{ asset('storage/' . $pengurus->image) }}"
                                    class="card-img-top rounded-circle mx-auto mt-3" alt="{{ $pengurus->name }}"
                                    style="width: 150px; height: 150px; object-fit: cover;">
                            @else
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                                    class="card-img-top rounded-circle mx-auto mt-3" alt="{{ $pengurus->name }}"
                                    style="width: 150px; height: 150px; object-fit: cover;">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $pengurus->name }}</h5>
                                <p class="text-muted">{{ $pengurus->jabatan }}</p>
                                <p class="card-text">{{ $pengurus->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        .team-slider .slick-prev:before,
        .team-slider .slick-next:before {
            color: var(--primary);
            font-size: 24px;
        }

        .team-slider .slick-prev {
            left: -30px;
        }

        .team-slider .slick-next {
            right: -30px;
        }

        .team-slider .slick-slide {
            padding: 0 5px;
        }

        .team-slider .slick-list {
            margin: 0 -5px;
        }

        .team-slider .card {
            margin: 0 5px;
            transition: transform 0.3s;
        }

        .team-slider .card:hover {
            transform: translateY(-5px);
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.team-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
@endpush
@endsection
