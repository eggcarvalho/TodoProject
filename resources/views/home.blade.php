<!doctype html>
<html lang="pt-BR">

<head>
    <title>TODO LIST | Faça. Feito.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    @include('modals.add')
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center flex-column flex-wrap vh-100 gap-5">
            <div class="col-md-10">
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
                        @include('components.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>

    @stack('footer')
</body>

</html>