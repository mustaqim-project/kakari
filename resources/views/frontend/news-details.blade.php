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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('news') }}">Artikel</a></li>
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
                        <figure class="article-image">
                            <img src="{{ asset($news->image) }}" alt="{{ $title }}" class="img-fluid">
                            <figcaption class="image-caption">{{ $news->image_caption ?? $title }}</figcaption>
                        </figure>

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
                    @auth
                        <div class="card-footer bg-light">
                            <h5 class="mb-3"><i class="fas fa-comments me-2"></i>Comment
                                ({{ $news->comments()->count() }})</h5>

                            <!-- Comment Form -->
                            <div class="mb-4">
                                <form action="{{ route('news-comment') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <textarea name="comment" class="form-control" rows="3" placeholder="Tulis pertanyaan atau komentar Anda..."
                                            required></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Comments List -->
                            <div class="list-group list-group-flush">
                                @foreach ($news->comments()->whereNull('parent_id')->get() as $comment)
                                    <div class="list-group-item border-0 px-0 py-3">
                                        <div class="d-flex">
                                            <img src="{{ asset('frontend/assets/images/avatar.png') }}"
                                                class="rounded-circle me-3" alt="User">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <h6 class="mb-0">{{ $comment->user->name }}</h6>
                                                    <small
                                                        class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                </div>
                                                <p class="mb-2">{{ $comment->comment }}</p>
                                                <div>
                                                    <a href="#" class="text-primary me-3" data-toggle="modal"
                                                        data-target="#replyModal-{{ $comment->id }}"><i
                                                            class="fas fa-reply me-1"></i>Balas</a>
                                                    <a href="#" class="text-primary"><i
                                                            class="fas fa-thumbs-up me-1"></i>Suka
                                                        ({{ $comment->likes }})
                                                    </a>
                                                </div>

                                                <!-- Replies -->
                                                @if ($comment->reply()->count() > 0)
                                                    <div class="mt-3 ps-3 border-start border-2 border-primary">
                                                        @foreach ($comment->reply as $reply)
                                                            <div class="d-flex">
                                                                <img src="{{ asset('frontend/assets/images/avatar.png') }}"
                                                                    class="rounded-circle me-2" alt="User">
                                                                <div>
                                                                    <div
                                                                        class="d-flex justify-content-between align-items-center mb-1">
                                                                        <h6 class="mb-0">{{ $reply->user->name }}</h6>
                                                                        <small
                                                                            class="text-muted">{{ $reply->created_at->diffForHumans() }}</small>
                                                                    </div>
                                                                    <p class="mb-2">{{ $reply->comment }}</p>
                                                                    <div>
                                                                        <a href="#" class="text-primary me-3"
                                                                            data-toggle="modal"
                                                                            data-target="#replyModal-{{ $reply->id }}"><i
                                                                                class="fas fa-reply me-1"></i>Balas</a>
                                                                        <a href="#" class="text-primary"><i
                                                                                class="fas fa-thumbs-up me-1"></i>Suka
                                                                            ({{ $reply->likes }})
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal for Reply -->
                                    <div class="modal fade" id="replyModal-{{ $comment->id }}" tabindex="-1"
                                        aria-labelledby="replyModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="replyModalLabel">Balas Komentar</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('news-comment-reply') }}" method="POST">
                                                        @csrf
                                                        <textarea name="reply" class="form-control" rows="4" placeholder="Tulis balasan..." required></textarea>
                                                        <input type="hidden" name="parent_id"
                                                            value="{{ $comment->id }}">
                                                        <input type="hidden" name="news_id"
                                                            value="{{ $news->id }}">
                                                        <button type="submit" class="btn btn-primary mt-3">Kirim
                                                            Balasan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- View All Comments -->
                            <div class="text-center mt-3">
                                <a href="{{ route('news-comments', $news->id) }}"
                                    class="btn btn-outline-primary btn-sm">Lihat Semua Komentar</a>
                            </div>
                        </div>
                    @else
                        <div class="card my-5">
                            <div class="card-body">
                                <h5 class="p-0">{{ __('frontend.Please') }} <a
                                        href="{{ route('login') }}">{{ __('frontend.Login') }}</a>
                                    {{ __('frontend.to comment in the post!') }}</h5>
                            </div>
                        </div>
                    @endauth

                </div>

                <!-- Related Materi -->
                @if (count($relatedPosts) > 0)
                    <div class="card shadow-sm mt-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="fas fa-link me-2"></i>Relate Post</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                @foreach ($relatedPosts as $post)
                                    <div class="col-md-6">
                                        <div class="card border-0 shadow-sm h-100">
                                            <div class="card-body">
                                                <span class="badge bg-primary mb-2">{{ $post->category->name }}</span>
                                                <h5>{!! truncate($post->title) !!}</h5>
                                                <p class="card-text">
                                                    {{ \Illuminate\Support\Str::limit($post->excerpt, 100) }}</p>
                                                <a href="{{ route('news-details', $post->slug) }}"
                                                    class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

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
                text: "{{ __("
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
