<!doctype html>
<html lang="pt-BR">

<head>
    <title>TODO LIST | Faça. Feito.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS v5.3.2 -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>

<body>
    @include('modals.add')
    @include('components.detail')
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center flex-column flex-wrap vh-100 gap-5">
            <div class="col-md-11">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        @include('components.header')
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        @include('components.search')
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        @error('error')
                        <div
                            class="alert alert-danger alert-dismissible fade show"
                            role="alert">
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"
                                aria-label="Close"></button>
                            <div class="row">
                                <div class="col-12">
                                    {{ $message }}
                                </div>
                            </div>
                        </div>
                        @enderror

                        @if (session('success'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @include('components.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-3.7.1.min.js') }}"></script>
    @stack('footer')
</body>

</html>