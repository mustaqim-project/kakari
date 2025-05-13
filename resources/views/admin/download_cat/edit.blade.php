@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Download Category') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Update Download Category') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.download_cat.update', $download_cat->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">{{ __('admin.Name') }}</label>
                        <input name="name" value="{{ old('name', $download_cat->name) }}" type="text" class="form-control @error('name') is-invalid @enderror" id="name">

                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
