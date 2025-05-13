@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('admin.Podcasts') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('admin.All Podcasts') }}</h4>
            <div class="card-header-action">
                <a href="{{ route('admin.podcast.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="podcasts-table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Playlist</th>
                            <th>Audio</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($podcasts as $podcast)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $podcast->title }}</td>
                                <td>{{ Str::limit($podcast->description, 50) }}</td>
                                <td>{{ $podcast->playlist->name ?? '-' }}</td>
                                <td>
                                    @if ($podcast->audio_file)
                                        <a href="{{ asset('storage/' . $podcast->audio_file) }}" target="_blank">Play</a>
                                    @else
                                        <span class="text-muted">Tidak ada file</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.podcast.edit', $podcast->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.podcast.destroy', $podcast->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
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
    $("#podcasts-table").DataTable({
        "columnDefs": [{
            "orderable": false,
            "targets": [5]
        }]
    });
</script>
@endpush
