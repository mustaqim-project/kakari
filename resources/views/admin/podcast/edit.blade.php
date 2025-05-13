@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.donasi') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.Update Donasi') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.donasi.update', $donasi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="bank">{{ __('admin.Bank') }}</label>
                        <input name="bank" value="{{ old('bank', $donasi->bank) }}" type="text" class="form-control" id="bank">
                        @error('bank')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nomor_rekening">{{ __('admin.Nomor Rekening') }}</label>
                        <input name="nomor_rekening" value="{{ old('nomor_rekening', $donasi->nomor_rekening) }}" type="text" class="form-control" id="nomor_rekening">
                        @error('nomor_rekening')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="atas_nama">{{ __('admin.Atas Nama') }}</label>
                        <input name="atas_nama" value="{{ old('atas_nama', $donasi->atas_nama) }}" type="text" class="form-control" id="atas_nama">
                        @error('atas_nama')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('admin.Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
