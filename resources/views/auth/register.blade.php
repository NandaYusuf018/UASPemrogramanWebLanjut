@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

<x-guest-layout>
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="card shadow-lg border-0" style="max-width: 400px; width: 100%;">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <x-application-logo class="mb-2" style="width:56px; height:56px;" />
                    <h2 class="h4 fw-bold mb-1 text-primary">Register CRUD Sewa</h2>
                    <p class="text-muted small">Buat akun baru untuk melanjutkan</p>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="form-control @error('name') is-invalid @enderror">
                        <x-input-error :messages="$errors->get('name')" class="invalid-feedback d-block" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-control @error('email') is-invalid @enderror">
                        <x-input-error :messages="$errors->get('email')" class="invalid-feedback d-block" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control @error('password') is-invalid @enderror">
                        <x-input-error :messages="$errors->get('password')" class="invalid-feedback d-block" />
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control @error('password_confirmation') is-invalid @enderror">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="invalid-feedback d-block" />
                    </div>
                    <div class="d-grid mb-2">
                        <button type="submit" class="btn btn-primary fw-semibold">Register</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <span class="text-muted small">Sudah punya akun?</span>
                    <a href="{{ route('login') }}" class="text-primary fw-semibold ms-1">Login</a>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @endpush
</x-guest-layout>
