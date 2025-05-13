@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Download Category') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Create Download Category') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.download_cat.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="bank">{{ __('admin.name') }}</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-primary">{{ __('admin.Create') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
