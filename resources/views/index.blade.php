<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}" />

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('libraries/fontawesome/css/all.css') }}" />
</head>

<body class="bg-light-subtle">
    <div class="position-relative vh-login d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-xl-3">
                    <div class="card border-light-subtle">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center my-3">
                                <img src="{{ asset('images/favicon.png') }}" class="w-25" alt="Logo">
                            </div>
                            <h4 class="text-center pb-3">Sistem Pendataan Pegawai</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="my-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username"
                                            class="form-control @error('username') error-input @enderror"
                                            placeholder="Masukkan Username" value="{{ old('username') }}">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="my-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') error-input @enderror"
                                            placeholder="Masukkan Password" value="{{ old('password') }}">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 my-3 rounded-2">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer>
        <div class="text-center">
            <span class="text-dark-emphasis"><i class="fa-regular fa-copyright"></i> by Hilmi Mughid 2024</span>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="{{ asset('libraries/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
