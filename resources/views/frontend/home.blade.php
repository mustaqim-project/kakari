@extends('frontend.layouts.master')

@section('content')
    @include('frontend.home-components.hero-section')
    @include('frontend.home-components.live-streaming-section')

    @include('frontend.home-components.articles-section')

    {{-- @include('frontend.home-components.kajian-ilmu-section') --}}


    @include('frontend.home-components.multimedia-section')

    {{-- @include('frontend.home-components.pendidikan-section') --}}

    {{-- @include('frontend.home-components.video-playlist-section') --}}
@endsection
