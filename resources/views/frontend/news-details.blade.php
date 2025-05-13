@extends('frontend.layouts.master')


<!-- End Setting metas -->
@section('content')
<!-- Setting metas -->
@section('title', $news->title)
@section('meta_keyword', $news->meta_keyword)
@section('meta_description', $news->meta_description)
@section('meta_og_title', $news->meta_title)
@section('meta_og_description', $news->meta_description)
@section('meta_og_image', asset($news->image))
@section('meta_tw_title', $news->meta_title)
@section('meta_tw_description', $news->meta_description)
@section('meta_tw_image', asset($news->image))
<!-- End Setting metas -->
@php
$title = htmlspecialchars(trim($news->title), ENT_QUOTES, 'UTF-8');
@endphp

<section class="pb-80">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Breadcrumb Navigation -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('news') }}">Kajian</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-8">
                <!-- Main Content - Detail Materi -->
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">{!! $news->title !!}</h5>
                            <div>
                                <span class="badge bg-white text-primary me-2"><i class="fas fa-clock me-1"></i>
                                    {{ date('M d, Y', strtotime($news->created_at)) }}</span>
                                <span class="badge bg-white text-primary"><i class="fas fa-eye me-1"></i>
                                    {{ date('M d, Y', strtotime($news->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Video Player -->
                        <div class="ratio ratio-16x9 mb-4">
                            <iframe src="{{ asset($news->image) }}" title="Pengantar Tafsir Surah Yasin"
                                allowfullscreen></iframe>
                        </div>

                        <!-- Materi Content -->
                        <div class="mb-4">
                            {!! $news->content !!}
                        </div>



                        <!-- Navigation Between Materi -->
                        <div class="d-flex justify-content-between mt-4">
                            @if ($previousPost)
                            <a href="{{ route('news-details', $previousPost->slug) }}" class="btn btn-primary">
                                <i class="fas fa-arrow-left me-2"></i>{!! truncate($previousPost->title) !!}
                            </a>
                            @endif

                            @if ($nextPost)
                            <a href="{{ route('news-details', $nextPost->slug) }}" class="btn btn-primary">
                                {!! truncate($nextPost->title) !!}<i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            @endif


                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="card-footer bg-light">
                        <h5 class="mb-3"><i class="fas fa-comments me-2"></i>Diskusi (24)</h5>

                        <!-- Comment Form -->
                        <div class="mb-4">
                            <form>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Tulis pertanyaan atau komentar Anda..."></textarea>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                                </div>
                            </form>
                        </div>

                        <!-- Comments List -->
                        <div class="list-group list-group-flush">
                            <!-- Comment 1 -->
                            <div class="list-group-item border-0 px-0 py-3">
                                <div class="d-flex">
                                    <img src="https://via.placeholder.com/50" class="rounded-circle me-3"
                                        alt="User">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="mb-0">Abdul Malik</h6>
                                            <small class="text-muted">2 hari lalu</small>
                                        </div>
                                        <p class="mb-2">Ustadz, apakah ada perbedaan pendapat ulama tentang keutamaan
                                            surah Yasin ini?</p>
                                        <div>
                                            <a href="#" class="text-primary me-3"><i
                                                    class="fas fa-reply me-1"></i>Balas</a>
                                            <a href="#" class="text-primary"><i
                                                    class="fas fa-thumbs-up me-1"></i>Suka (5)</a>
                                        </div>

                                        <!-- Reply -->
                                        <div class="mt-3 ps-3 border-start border-2 border-primary">
                                            <div class="d-flex">
                                                <img src="https://via.placeholder.com/40" class="rounded-circle me-2"
                                                    alt="Ustadz">
                                                <div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="mb-0">Ust. Ahmad Al-Fathoni</h6>
                                                        <small class="text-muted">1 hari lalu</small>
                                                    </div>
                                                    <p class="mb-2">Ada beberapa perbedaan pendapat di kalangan ulama
                                                        mengenai derajat hadits tentang keutamaan Yasin. Namun mayoritas
                                                        ulama menerima bahwa surah ini memiliki keutamaan khusus.</p>
                                                    <div>
                                                        <a href="#" class="text-primary me-3"><i
                                                                class="fas fa-reply me-1"></i>Balas</a>
                                                        <a href="#" class="text-primary"><i
                                                                class="fas fa-thumbs-up me-1"></i>Suka (12)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Comment 2 -->
                            <div class="list-group-item border-0 px-0 py-3">
                                <div class="d-flex">
                                    <img src="https://via.placeholder.com/50" class="rounded-circle me-3"
                                        alt="User">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="mb-0">Siti Aminah</h6>
                                            <small class="text-muted">3 hari lalu</small>
                                        </div>
                                        <p class="mb-2">Jazakallah khairan ustadz untuk penjelasannya. Sangat
                                            bermanfaat.</p>
                                        <div>
                                            <a href="#" class="text-primary me-3"><i
                                                    class="fas fa-reply me-1"></i>Balas</a>
                                            <a href="#" class="text-primary"><i
                                                    class="fas fa-thumbs-up me-1"></i>Suka (8)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- View All Comments -->
                        <div class="text-center mt-3">
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Semua Komentar</a>
                        </div>
                    </div>
                </div>

                <!-- Related Materi -->
                <div class="card shadow-sm mt-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0"><i class="fas fa-link me-2"></i>Materi Terkait</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <span class="badge bg-primary mb-2">Tafsir & Hadis</span>
                                        <h5>Tafsir Surah Al-Mulk</h5>
                                        <p class="card-text">Kajian mendalam tentang surah yang menyelamatkan dari azab
                                            kubur.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted"><i class="fas fa-clock me-1"></i> 10
                                                Episode</small>
                                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <span class="badge bg-primary mb-2">Tafsir & Hadis</span>
                                        <h5>Tafsir Surah Ar-Rahman</h5>
                                        <p class="card-text">Pemahaman mendalam tentang nikmat-nikmat Allah yang
                                            disebutkan berulang.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted"><i class="fas fa-clock me-1"></i> 8
                                                Episode</small>
                                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Search Widget -->
                @include('frontend.components.sidebar.search-widget')

                <!-- Popular Articles -->
                @include('frontend.components.sidebar.popular-articles')

                <!-- Categories -->
                @include('frontend.components.sidebar.categories')

                <!-- E-Koran -->
                @include('frontend.components.sidebar.e-koran')


                <!-- Newsletter Subscription -->
                @include('frontend.components.sidebar.newsletter')

            </div>
        </div>
    </div>
</section>



@endsection




@push('content')
<script>
    $(document).ready(function() {
        $('.delete-msg').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: '{{ __('
                frontend.Are you sure ? ') }}',
                text : "{{ __("
                frontend.You won '\t be able to revert this!") }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ __('
                frontend.Yes,
                delete it!') }}'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        method: 'DELETE',
                        url: "{{ route('news-comment-destroy') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            if (data.status === 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    data.message,
                                    'success'
                                )
                                window.location.reload();
                            } else if (data.status === 'error') {
                                Swal.fire(
                                    'Error!',
                                    data.message,
                                    'error'
                                )
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });


                }
            })
        })

    })
</script>
@endpush
