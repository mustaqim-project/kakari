<!-- Newsletter Subscription -->
<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Berlangganan Newsletter</h5>
    </div>
    <div class="card-body">
        <p>Dapatkan artikel terbaru langsung ke email Anda</p>
        <form action="{{ route('subscribe-newsletter') }}" method="POST" class="newsletter-form">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control"
                    placeholder="Alamat Email" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 newsletter-button">Berlangganan</button>
        </form>
    </div>
</div>
