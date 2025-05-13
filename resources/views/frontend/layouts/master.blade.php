<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>
        @hasSection('title')
            @yield('title')
        @else
            {{ $settings['site_seo_title'] }}
        @endif
    </title>

    <link rel="icon" href="{{ asset($settings['site_favicon']) }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('baru/css.css') }}" rel="stylesheet">

    <meta name="description" content="@yield('meta_description', $settings['site_seo_description'] ?? '')" />
    <meta name="keywords" content="@yield('meta_keyword', $settings['site_seo_keywords'] ?? '')" itemprop="keywords" />

    <meta name="og:title"
        content="@hasSection('meta_og_title')@yield('meta_og_title')@else{{ $settings['site_name'] }}@endif" />
    <meta name="og:description"
        content="@hasSection('meta_og_description')@yield('meta_og_description')@else{{ $settings['site_seo_description'] }}@endif" />
    <meta name="og:image"
        content="@hasSection('meta_og_image')@yield('meta_og_image')@else{{ asset($settings['site_logo']) }}@endif" />

    <meta name="twitter:title"
        content="@hasSection('meta_tw_title')@yield('meta_tw_title')@else{{ $settings['site_name'] }}@endif" />
    <meta name="twitter:description"
        content="@hasSection('meta_tw_description')@yield('meta_tw_description')@else{{ $settings['site_seo_description'] }}@endif" />
    <meta name="twitter:image"
        content="@hasSection('meta_tw_image')@yield('meta_tw_image')@else{{ asset($settings['site_logo']) }}@endif" />
</head>

<body>
    @php
        $socialLinks = \App\Models\SocialLink::where('status', 1)->get();
        $footerInfo = \App\Models\FooterInfo::where('language', getLangauge())->first();
        $footerGridOne = \App\Models\FooterGridOne::where(['status' => 1, 'language' => getLangauge()])->get();
        $footerGridTwo = \App\Models\FooterGridTwo::where(['status' => 1, 'language' => getLangauge()])->get();
        $footerGridThree = \App\Models\FooterGridThree::where(['status' => 1, 'language' => getLangauge()])->get();
        $footerGridOneTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_one_title',
            'language' => getLangauge(),
        ])->first();
        $footerGridTwoTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_two_title',
            'language' => getLangauge(),
        ])->first();
        $footerGridThreeTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_three_title',
            'language' => getLangauge(),
        ])->first();

        $contact = \App\Models\Contact::where('language', getLangauge())->first();
    @endphp

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    @include('sweetalert::alert')
    @include('frontend.layouts.scripts')
</body>

</html>
