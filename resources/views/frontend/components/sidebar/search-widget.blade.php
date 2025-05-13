<!-- Search Widget -->
<div class="card mb-4">
    <div class="card-body">
        <form action="{{ route('kajian') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control"
                    placeholder="Cari artikel..." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>
