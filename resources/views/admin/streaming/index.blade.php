@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Streaming') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Streaming') }}</h4>
            </div>

            <div class="card-body">
                <!-- Form Content -->
                <form action="{{ route('admin.streaming.update', $streaming->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')



                    <!-- Judul -->
                    <div class="form-group">
                        <label for="judul">{{ __('admin.Judul') }}</label>
                        <input type="text" name="judul" class="form-control"
                            value="{{ old('judul', $streaming->judul) }}">
                        @error('judul')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi">{{ __('admin.Deskripsi') }}</label>
                        <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $streaming->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                     <!-- Code Frame -->
                     <div class="form-group">
                        <label for="code_frame">{{ __('admin.Code Frame') }}</label>
                        <textarea name="code_frame" class="form-control">{{ old('code_frame', $streaming->code_frame) }}</textarea>
                        @error('code_frame')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">{{ __('admin.Save') }}</button>
                </form>
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
    </script>
@endpush
