@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Donasi') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Create Donasi') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.donasi.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="bank">{{ __('admin.Bank') }}</label>
                        <input name="bank" type="text" class="form-control" id="bank" value="{{ old('bank') }}">
                        @error('bank')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nomor_rekening">{{ __('admin.Nomor Rekening') }}</label>
                        <input name="nomor_rekening" type="text" class="form-control" id="nomor_rekening" value="{{ old('nomor_rekening') }}">
                        @error('nomor_rekening')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="atas_nama">{{ __('admin.Atas Nama') }}</label>
                        <input name="atas_nama" type="text" class="form-control" id="atas_nama" value="{{ old('atas_nama') }}">
                        @error('atas_nama')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('admin.Create') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
