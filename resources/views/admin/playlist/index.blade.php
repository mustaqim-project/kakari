@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Playlist Video Youtube') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.All Playlist Video Youtube') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.playlist.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="playlist-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Vidio</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($playlists as $playlist)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($playlist->cover_image)
                                            <img src="{{ $playlist->cover_image_url }}" alt="cover" width="60" class="img-thumbnail">
                                        @else
                                            <span class="badge badge-secondary">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $playlist->title }}</td>
                                    <td>{{ Str::limit($playlist->description, 50) }}</td>
                                    <td>
                                        <span class="badge {{ $playlist->is_active ? 'badge-success' : 'badge-danger' }}">
                                            {{ $playlist->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge {{ $playlist->is_featured ? 'badge-primary' : 'badge-secondary' }}">
                                            {{ $playlist->is_featured ? 'Yes' : 'No' }}
                                        </span>
                                    </td>
                                    <td>{{ $playlist->podcasts_count }}</td>
                                    <td>
                                        <a href="{{ route('admin.playlist.edit', $playlist->id) }}"
                                            class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.playlist.destroy', $playlist->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Are you sure you want to delete this?')">
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
        $("#playlist-table").DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [7] // Action column
            }]
        });
    </script>
@endpush
