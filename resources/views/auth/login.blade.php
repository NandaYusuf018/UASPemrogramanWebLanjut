@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

<x-guest-layout>
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="card shadow-lg border-0" style="max-width: 370px; width: 100%;">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    {{-- <x-application-logo class="mb-2" style="width:56px; height:56px;" /> --}}
                    <h2 class="h4 fw-bold mb-1 text-primary">Login CRUD Sewa</h2>
                    <p class="text-muted small">Silakan masuk untuk melanjutkan</p>
                </div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-3" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-control @error('email') is-invalid @enderror">
                        <x-input-error :messages="$errors->get('email')" class="invalid-feedback d-block" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control @error('password') is-invalid @enderror">
                        <x-input-error :messages="$errors->get('password')" class="invalid-feedback d-block" />
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                            <label class="form-check-label" for="remember_me">Ingat saya</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="small text-decoration-none text-primary" href="{{ route('password.request') }}">Lupa password?</a>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary fw-semibold">Log in</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <span class="text-muted small">Belum punya akun?</span>
                    <a href="{{ route('register') }}" class="text-primary fw-semibold ms-1">Daftar</a>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @endpush
</x-guest-layout>
