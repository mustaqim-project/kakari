@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Donasi') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.All Donasi') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.donasi.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="donasi-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>{{ __('admin.Bank') }}</th>
                                <th>{{ __('admin.Nomor Rekening') }}</th>
                                <th>{{ __('admin.Atas Nama') }}</th>
                                <th>{{ __('admin.Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donasis as $donasi)
                                <tr>
                                    <td>{{ $donasi->id }}</td>
                                    <td>{{ $donasi->bank }}</td>
                                    <td>{{ $donasi->nomor_rekening }}</td>
                                    <td>{{ $donasi->atas_nama }}</td>
                                    <td>
                                        <a href="{{ route('admin.donasi.edit', $donasi->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.donasi.destroy', $donasi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $("#donasi-table").DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [4]
            }]
        });
    </script>
@endpush
