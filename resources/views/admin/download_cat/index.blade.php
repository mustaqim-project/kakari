@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('admin.Download Category') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('admin.All Category') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.download_cat.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> {{ __('admin.Create new') }}
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="download_cat-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>{{ __('admin.Name') }}</th>
                                <th>{{ __('admin.Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $download_cat)
                                <tr>
                                    <td>{{ $download_cat->id }}</td>
                                    <td>{{ $download_cat->name }}</td>

                                    <td>
                                        <a href="{{ route('admin.download_cat.edit', $download_cat->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.download_cat.destroy', $download_cat->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
