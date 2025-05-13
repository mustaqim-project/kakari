@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.About Page') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.About Page') }}</h4>
            </div>

            <div class="card-body">
                <!-- Tab Navigation -->
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    @foreach ($languages as $language)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->index === 0 ? 'active' : '' }}"
                               id="home-tab2" data-toggle="tab" href="#home-{{ $language->lang }}"
                               role="tab" aria-controls="home" aria-selected="true">
                                {{ $language->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- Tab Content -->
                <div class="tab-content tab-bordered" id="myTab3Content">
                    @foreach ($languages as $language)
                        @php
                            $about = \App\Models\About::where('language', $language->lang)->first();
                        @endphp
                        <div class="tab-pane fade show {{ $loop->index === 0 ? 'active' : '' }}"
                             id="home-{{ $language->lang }}" role="tabpanel"
                             aria-labelledby="home-tab2">
                            <div class="card-body">
                                <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <!-- Image Upload -->
                                    <div class="form-group">
                                        <label for="image">{{ __('admin.Image') }}</label>
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                                            <input type="file" name="image" id="image-upload">

                                            @if ($about && $about->image)
                                                <div class="mt-2">
                                                    <label>{{ __('admin.Current Image') }}:</label>
                                                    <img src="{{ asset($about->image) }}" alt="Current Image" width="150" class="img-thumbnail">
                                                </div>
                                            @endif
                                        </div>
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Content Textarea -->
                                    <div class="form-group">
                                        <label for="content">{{ __('admin.About Content') }}</label>
                                        <textarea name="content" class="d-none-{{ $language->lang }}" id="content" cols="30" rows="10">
                                            {!! @$about->content !!}
                                        </textarea>
                                        <input type="hidden" name="language" value="{{ $language->lang }}">
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary">{{ __('admin.Save') }}</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                Toast.fire({
                    icon: 'error',
                    title: "{{ $error }}"
                });
            @endforeach
        @endif

        // Initialize Summernote editor for each language
        if (jQuery().summernote) {
            @foreach ($languages as $language)
                $(".summernote-{{ $language->lang }}").summernote({
                    dialogsInBody: true,
                    minHeight: 250,
                });
            @endforeach
        }
    </script>
@endpush
