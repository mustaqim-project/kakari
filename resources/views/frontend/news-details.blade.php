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
                <!-- breaddcrumb -->
                <!-- Breadcrumb -->
                <ul class="breadcrumbs bg-light mb-4">
                    <li class="breadcrumbs__item">
                        <a href="{{ url('/') }}" class="breadcrumbs__url">
                            <i class="fa fa-home"></i> {{ __('frontend.Home') }}
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{ route('news') }}" class="breadcrumbs__url">{{ __('frontend.News') }}</a>
                    </li>


                </ul>
                <!-- end breadcrumb -->
            </div>
            <div class="col-md-8">
                <!-- content article detail -->
                <!-- Article Header -->
                <div class="wrap__article-detail-title">
                    <h1 class="article-title">
                        {!! $news->title !!}
                    </h1>
                    <div class="article-meta">
                        <span class="article-author">
                            <i class="fa fa-user"></i> {{ $news->auther->name }}
                        </span>
                        <span class="article-date">
                            <i class="fa fa-calendar"></i> {{ date('M d, Y', strtotime($news->created_at)) }}
                        </span>

                        <span class="article-views">
                            <i class="fa fa-eye"></i> {{ convertToKFormat($news->views) }} {{ __('frontend.views') }}
                        </span>
                    </div>
                </div>

                <!-- Article Image -->
                <div class="wrap__article-detail-image mt-4">
                    <figure class="article-image">
                        <img src="{{ asset($news->image) }}" alt="{{ $title }}" class="img-fluid">
                        <figcaption class="image-caption">{{ $news->image_caption ?? $title }}</figcaption>
                    </figure>
                </div>

                <!-- Article Content -->
                <div class="wrap__article-detail-content">
                    <div class="article-share">
                        <span class="share-label">{{ __('frontend.share on:') }}</span>
                        <ul class="share-buttons">
                            <li>
                                <a class="btn btn-social facebook"
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                    target="_blank">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-social twitter"
                                    href="https://twitter.com/intent/tweet?text={{ $news->title }}&url={{ url()->current() }}"
                                    target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-social whatsapp"
                                    href="https://wa.me/?text={{ $news->title }}%20{{ url()->current() }}"
                                    target="_blank">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-social telegram"
                                    href="https://t.me/share/url?url={{ url()->current() }}&text={{ $news->title }}"
                                    target="_blank">
                                    <i class="fa fa-telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-social linkedin"
                                    href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $news->title }}"
                                    target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="article-body">
                        {!! $news->content !!}
                    </div>
                </div>

                <!-- Article Tags -->
                <div class="blog-tags">
                    <h4 class="tags-title"><i class="fa fa-tags"></i> {{ __('frontend.Tags') }}:</h4>
                    <ul class="tags-list">
                        @foreach ($news->tags as $tag)
                            <li>
                                <a href="{{ route('news', ['tag' => $tag->name]) }}" class="tag-item">
                                    #{{ $tag->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- end tags-->

                <!-- authors-->
                <!-- Profile author -->
                <div class="wrap__profile">
                    <div class="wrap__profile-author">
                        <figure>
                            <img style="object-fit: cover;" src="{{ asset($news->auther->image) }}" alt=""
                                class="img-fluid rounded-circle">
                        </figure>
                        <div class="wrap__profile-author-detail">
                            <div class="author-wrapper">
                                <!--<div class="wrap__profile-author-detail-name">{{ $news->auther->getRoleNames()->first() }}</div>-->
                                <div class="wrap__profile-author-detail-name">We Are Team</div>
                                <h4>{{ $news->auther->name }}</h4>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end author-->

                <!-- Comment  -->
                @auth
                    <div id="comments" class="comments-area">
                        <h3 class="comments-title">{{ $news->comments()->count() }} {{ __('frontend.Comments:') }}</h3>

                        <ol class="comment-list">
                            @foreach ($news->comments()->whereNull('parent_id')->get() as $comment)
                                <li class="comment">
                                    <aside class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="{{ asset('frontend/assets/images/avatar.png') }}" class="avatar"
                                                    alt="image">
                                                <b class="fn">{{ $comment->user->name }}</b>
                                                <span class="says">{{ __('frontend.says') }}:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="javascript:;">
                                                    <span>{{ date('M, d, Y H:i', strtotime($comment->created_at)) }}</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="comment-content">
                                            <p>
                                                {{ $comment->comment }}
                                            </p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link" data-toggle="modal"
                                                data-target="#exampleModal-{{ $comment->id }}">{{ __('frontend.Reply') }}</a>
                                            <span class="delete-msg" data-id="{{ $comment->id }}">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                        </div>
                                    </aside>

                                    @if ($comment->reply()->count() > 0)
                                        @foreach ($comment->reply as $reply)
                                            <ol class="children">
                                                <li class="comment">
                                                    <aside class="comment-body">
                                                        <div class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <img src="{{ asset('frontend/assets/images/avatar.png') }}"
                                                                    class="avatar" alt="image">
                                                                <b class="fn">{{ $reply->user->name }}</b>
                                                                <span class="says">{{ __('frontend.says:') }}</span>
                                                            </div>

                                                            <div class="comment-metadata">
                                                                <a href="javascript:;">
                                                                    <span>{{ date('M, d, Y H:i', strtotime($reply->created_at)) }}</span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="comment-content">
                                                            <p>{{ $reply->comment }}</p>
                                                        </div>

                                                        <div class="reply">
                                                            @if ($loop->last)
                                                                <a href="#" class="comment-reply-link"
                                                                    data-toggle="modal"
                                                                    data-target="#exampleModal-{{ $comment->id }}">{{ __('frontend.Reply') }}</a>
                                                            @endif

                                                            <span class="delete-msg" style="margin-left: auto;"
                                                                data-id="{{ $reply->id }}">
                                                                <i class="fa fa-trash"></i>
                                                            </span>
                                                        </div>
                                                    </aside>
                                                </li>
                                            </ol>
                                        @endforeach
                                    @endif

                                </li>

                                <!-- Modal -->
                                <div class="comment_modal">
                                    <div class="modal fade" id="exampleModal-{{ $comment->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        {{ __('frontend.Write Your Comment') }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('news-comment-replay') }}" method="POST">
                                                        @csrf
                                                        <textarea name="replay" cols="30" rows="7" placeholder="Type. . ."></textarea>
                                                        <input type="hidden" name="news_id"
                                                            value="{{ $news->id }}">
                                                        <input type="hidden" name="parent_id"
                                                            value="{{ $comment->id }}">

                                                        <button type="submit">{{ __('frontend.submit') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </ol>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">{{ __('frontend.Leave a Reply') }}</h3>

                            <form action="{{ route('news-comment') }}" method="POST" class="comment-form">
                                @csrf
                                <p class="comment-notes">

                                </p>
                                <p class="comment-form-comment">
                                    <label for="comment">{{ __('frontend.Comment') }}</label>
                                    <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                    <input type="hidden" name="news_id" value="{{ $news->id }}">
                                    <input type="hidden" name="parent_id" value="">

                                    @error('comment')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </p>

                                <p class="form-submit mb-0">
                                    <input type="submit" name="submit" id="submit" class="submit"
                                        value="Post Comment">
                                </p>
                            </form>
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



                <!-- end comment -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="single_navigation-prev">
                            @if ($previousPost)
                                <a href="{{ route('news-details', $previousPost->slug) }}">
                                    <span>{{ __('frontend.previous post') }}</span>
                                    {!! truncate($previousPost->title) !!}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single_navigation-next text-left text-md-right">
                            @if ($nextPost)
                                <a href="{{ route('news-details', $nextPost->slug) }}">
                                    <span>{{ __('frontend.next post') }}</span>
                                    {!! truncate($nextPost->title) !!}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                @if ($ad->view_page_ad_status == 1)
                    <div class="small_add_banner mb-5 pb-4">
                        <div class="small_add_banner_img">
                            <a href="{{ $ad->view_page_ad_url }}">
                                <img src="{{ asset($ad->view_page_ad) }}" alt="adds">
                            </a>
                        </div>
                    </div>
                @endif


                <div class="clearfix"></div>

                @if (count($relatedPosts) > 0)
                    <div class="related-article">
                        <h4>
                            {{ __('frontend.you may also like') }}
                        </h4>
                        <div class="article__entry-carousel-three">
                            @foreach ($relatedPosts as $post)
                                <div class="item">
                                    <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="{{ route('news-details', $post->slug) }}">
                                                <img src="{{ asset($post->image) }}" alt=""
                                                    class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-primary">
                                                        {{ __('frontend.by') }} {{ $post->auther->name }}
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{ date('M d, Y', strtotime($post->created_at)) }}
                                                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="{{ route('news-details', $post->slug) }}">
                                                    {!! truncate($post->title) !!}
                                                </a>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
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


<section class="py-5" style="background-color: var(--bg);">
    <div class="container">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('news') }}">Kajian</a></li>
            </ol>
        </nav>

        <div class="row">
            <!-- Main Content - Detail Materi -->
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">{!! $news->title !!}</h5>
                            <div>
                                <span class="badge bg-white text-primary me-2"><i class="fas fa-clock me-1"></i> {{ date('M d, Y', strtotime($news->created_at)) }}</span>
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
                title: '{{ __('frontend.Are you sure?') }}',
                text: "{{ __("frontend.You won'\t be able to revert this!") }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ __('frontend.Yes, delete it!') }}'
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
