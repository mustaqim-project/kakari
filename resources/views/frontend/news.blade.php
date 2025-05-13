@extends('frontend.layouts.master')

@section('title', $category ? $category->name : 'ic-syekhburhanuddin')
@section('meta_keyword', $category ? $category->meta_keyword : 'ic-syekhburhanuddin')
@section('meta_description', $category ? $category->meta_description : 'ic-syekhburhanuddin')
@section('meta_og_title', $category ? $category->name : 'ic-syekhburhanuddin')
@section('meta_og_description', $category ? $category->meta_description : 'ic-syekhburhanuddin')
@section('meta_tw_title', $category ? $category->name : 'ic-syekhburhanuddin')
@section('meta_tw_description', $category ? $category->meta_description : 'ic-syekhburhanuddin')


@section('content')
    <section class="blog_pages">
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

            </div>



            <div class="col-md-8">

                <div class="blog_page_search">
                    <form action="{{ route('news') }}" method="GET">
                        <div class="row">
                            <div class="col-lg-5">
                                <input type="text" placeholder="Type here" value="{{ request()->search }}"
                                    name="search">
                            </div>
                            <div class="col-lg-4">
                                <select name="category">
                                    <option value="">{{ __('frontend.All') }}</option>
                                    @foreach ($categories as $category)
                                        <option {{ $category->slug === request()->category ? 'selected' : '' }}
                                            value="{{ $category->slug }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-lg-3">
                                <button type="submit">{{ __('frontend.search') }}</button>
                            </div>
                        </div>
                    </form>
                </div>

                <aside class="wrapper__list__article ">
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
                                            <img src="{{ asset($post->image) }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <div class="article__category">
                                            {{ $post->category->name }}
                                        </div>
                                        <ul class="list-inline">
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
                                        <h5>
                                            <a href="{{ route('news-details', $post->slug) }}">
                                                {!! truncate($post->title) !!}
                                            </a>
                                        </h5>
                                        <p>
                                            {!! truncate($post->content, 100) !!}
                                        </p>
                                        <a href="{{ route('news-details', $post->slug) }}"
                                            class="btn btn-outline-primary mb-4 text-capitalize">
                                            {{ __('frontend.read more') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if (count($news) === 0)
                            <div class="text-center w-100">
                                <h4>{{ __('frontend.No News Found') }} :(</h4>
                            </div>
                        @endif
                    </div>

                </aside>
                <div class="text-center" style="display: flex; justify-content: center;">
                    <!-- Pagination -->
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



    </section>
@endsection
