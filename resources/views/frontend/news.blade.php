@extends('frontend.layouts.master')

@section('title', $category ? $category->name : 'ic-syekhburhanuddin')
@section('meta_keyword', $category ? $category->meta_keyword : 'ic-syekhburhanuddin')
@section('meta_description', $category ? $category->meta_description : 'ic-syekhburhanuddin')
@section('meta_og_title', $category ? $category->name : 'ic-syekhburhanuddin')
@section('meta_og_description', $category ? $category->meta_description : 'ic-syekhburhanuddin')
@section('meta_tw_title', $category ? $category->name : 'ic-syekhburhanuddin')
@section('meta_tw_description', $category ? $category->meta_description : 'ic-syekhburhanuddin')


@section('content')

    <style>
        .blog_page_search {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .search-input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .category-select {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
            font-size: 14px;
        }

        .search-button {
            width: 100%;
            padding: 10px 15px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .search-button:hover {
            background-color: #2779bd;
        }

        /* Article Styles */
        .article__entry {
            margin-bottom: 30px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .article__entry:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .article-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .article__entry:hover .article-image {
            transform: scale(1.03);
        }

        .article__content {
            padding: 20px;
        }

        .category-tag {
            display: inline-block;
            padding: 3px 10px;
            background-color: #f1f5f8;
            color: #3490dc;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .article-meta {
            margin-bottom: 10px;
            font-size: 13px;
            color: #6c757d;
        }

        .article-title {
            font-size: 18px;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .article-title a {
            color: #2d3748;
            text-decoration: none;
            transition: color 0.3s;
        }

        .article-title a:hover {
            color: #3490dc;
        }

        .article-excerpt {
            color: #4a5568;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .read-more {
            padding: 8px 20px;
            font-size: 14px;
            border-radius: 4px;
        }

        /* No Results */
        .no-results {
            padding: 40px 0;
            color: #718096;
        }

        /* Pagination */
        .pagination-container {
            margin-top: 30px;
        }

        .pagination {
            display: inline-flex;
        }

        .page-item.active .page-link {
            background-color: #3490dc;
            border-color: #3490dc;
        }

        .page-link {
            color: #3490dc;
        }

        /* Category Header */
        .border_section {
            padding-bottom: 10px;
            margin-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
            color: #2d3748;
        }
    </style>
    <section class="pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="javascirt:;">Artikel</a></li>
                        </ol>
                    </nav>
                </div>


                <div class="col-md-8">
                    <!-- Search Form -->
                    <div class="blog_page_search">
                        <form action="{{ route('news') }}" method="GET">
                            <div class="row">
                                <div class="col-lg-5">
                                    <input type="text" placeholder="Type here" value="{{ request()->search }}"
                                        name="search" class="search-input">
                                </div>
                                <div class="col-lg-4">
                                    <select name="category" class="category-select">
                                        <option value="">{{ __('frontend.All') }}</option>
                                        @foreach ($categories as $category)
                                            <option {{ $category->slug === request()->category ? 'selected' : '' }}
                                                value="{{ $category->slug }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="search-button">{{ __('frontend.search') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Article List -->
                    <aside class="wrapper__list__article">
                        @if (request()->has('category'))
                            <h4 class="border_section">{{ __('frontend.Category') }}: {{ request()->category }}</h4>
                        @endif

                        <div class="row">
                            @foreach ($news as $post)
                                <div class="col-lg-6">
                                    <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="{{ route('news-details', $post->slug) }}">
                                                <img src="{{ asset($post->image) }}" alt=""
                                                    class="img-fluid article-image">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <div class="article__category category-tag">
                                                {{ $post->category->name }}
                                            </div>
                                            <ul class="list-inline article-meta">
                                                <li class="list-inline-item">
                                                    <span class="text-primary">
                                                        {{ __('frontend.by') }} {{ $post->auther->name }}
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-dark text-capitalize">
                                                        {{ date('M d, Y', strtotime($post->created_at)) }}
                                                    </span>
                                                </li>
                                            </ul>
                                            <h5 class="article-title">
                                                <a href="{{ route('news-details', $post->slug) }}">
                                                    {!! truncate($post->title) !!}
                                                </a>
                                            </h5>
                                            <p class="article-excerpt">
                                                {!! truncate($post->content, 100) !!}
                                            </p>
                                            <a href="{{ route('news-details', $post->slug) }}"
                                                class="btn btn-outline-primary mb-4 text-capitalize read-more">
                                                {{ __('frontend.read more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if (count($news) === 0)
                                <div class="text-center w-100 no-results">
                                    <h4>{{ __('frontend.No News Found') }} :(</h4>
                                </div>
                            @endif
                        </div>
                    </aside>

                    <!-- Pagination -->
                    <div class="text-center pagination-container">
                        {{ $news->appends(request()->query())->links() }}
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
