@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.E-Koran') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.All E-Koran') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.ekoran.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="ekoran-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Image</th>
                                <th>Judul</th> <!-- Mengubah 'Nama File' menjadi 'Judul' -->
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ekorans as $ekoran)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($ekoran->image)
                                            <a href="{{ asset($ekoran->image) }}" target="_blank">ekoran</a>
                                        @else
                                            <span class="text-muted">Tidak ada file</span>
                                        @endif
                                    </td>
                                    <td>{{ $ekoran->judul }}</td>
                                    <td>{{ $ekoran->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('admin.ekoran.edit', $ekoran->id) }}"
                                            class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.ekoran.destroy', $ekoran->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
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
        $("#ekoran-table").DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [5] // Kolom aksi
            }]
        });
    </script>
@endpush
