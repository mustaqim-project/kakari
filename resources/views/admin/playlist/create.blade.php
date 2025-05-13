@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('admin.Playlist Video Youtube') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('admin.Create Playlist Video Youtube') }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.playlist.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Title --}}
                <div class="form-group">
                    <label for="title">{{ __('admin.Title') }}</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}" required>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Cover Image --}}
                <div class="form-group">
                    <label for="cover_image">{{ __('admin.Cover Image') }}</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                        <input type="file" name="cover_image" id="image-upload" accept="image/jpeg,image/png,image/jpg,image/gif">
                    </div>
                    <small class="text-muted">Max file size: 2MB. Allowed types: jpeg, png, jpg, gif</small>
                    @error('cover_image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description --}}
                <div class="form-group">
                    <label for="content">{{ __('admin.Description') }}</label>
                    <div id="editor-container"></div>
                    <textarea name="description" id="content" class="d-none"></textarea>
                    @error('content')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Status --}}
                <div class="form-group">
                    <label>{{ __('admin.Status') }}</label>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="is_active" value="1" class="selectgroup-input" checked>
                            <span class="selectgroup-button">{{ __('admin.Active') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="is_active" value="0" class="selectgroup-input">
                            <span class="selectgroup-button">{{ __('admin.Inactive') }}</span>
                        </label>
                    </div>
                    @error('is_active')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Featured --}}
                <div class="form-group">
                    <label class="custom-switch mt-2">
                        <input type="hidden" name="is_featured" value="0">
                        <input type="checkbox" name="is_featured" value="1" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">{{ __('admin.Featured Playlist') }}</span>
                    </label>
                    @error('is_featured')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">{{ __('admin.Create') }}</button>
                <a href="{{ route('admin.playlist.index') }}" class="btn btn-secondary ml-2">{{ __('admin.Cancel') }}</a>
            </form>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        // Image preview
        $(".image-preview").css({
            "background-image": "url({{ asset('assets/admin/img/no-image.png') }})",
            "background-size": "cover",
            "background-position": "center center"
        });

        $('#image-upload').change(function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                $(".image-preview").css("background-image", "url("+e.target.result+")");
                $("#image-label").text("Change File");
            }
            reader.readAsDataURL(this.files[0]);
        });


    });
</script>
@endpush
