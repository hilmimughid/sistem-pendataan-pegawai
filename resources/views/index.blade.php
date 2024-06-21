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
</head>

<body>
    <div class="position-relative min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center my-3">
                                <img src="{{ asset('images/favicon.png') }}" class="w-25" alt="Logo">
                            </div>
                            <h4 class="text-center">Pendataan Pegawai</h4>
                            <form method="POST" action="#">
                                @csrf
                                <div class="my-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Masukkan Email" required>
                                </div>
                                <div class="my-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Masukkan Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 my-3 rounded-2">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="{{ asset('libraries/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
