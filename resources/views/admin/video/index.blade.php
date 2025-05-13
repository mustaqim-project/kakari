@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('admin.Video Youtube') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('admin.All Video Youtube') }}</h4>
            <div class="card-header-action">
                <a href="{{ route('admin.video.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="videos-table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Thumbnail</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Playlist</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    @if ($video->thumbnail)
                                        <img src="{{ $video->thumbnail }}" alt="Thumbnail" width="100">
                                    @else
                                        <span class="text-muted">Tidak tersedia</span>
                                    @endif
                                </td>
                                <td>{{ $video->title }}</td>
                                <td>{{ Str::limit($video->description, 50) }}</td>
                                <td>{{ $video->playlist->title ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('admin.video.edit', $video->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.video.destroy', $video->id) }}" method="POST"
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

                {{-- Pagination --}}
                <div class="mt-3">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $("#videos-table").DataTable({
        "columnDefs": [{
            "orderable": false,
            "targets": [1, 5] // Thumbnail dan Aksi tidak bisa diurutkan
        }]
    });
</script>
@endpush
