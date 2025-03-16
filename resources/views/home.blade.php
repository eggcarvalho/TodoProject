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
            <div class="col-md-3 d-flex flex-column gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('asset/images/logo.png') }}" alt="" class="img-fluid">
                </a>
                <a href="#"
                    type="button"
                    class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-person-badge"></i> Gerenciar Responsável
                </a>
            </div>
            <div class=" col-md-9">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h6 class="m-0">
                            <i class="bi bi-search"></i> Pesquisar
                        </h6>
                    </div>
                    <form action="/" method="GET">
                        <div class="card-body d-flex gap-3 flex-column">
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-center">
                                    Número:
                                </div>
                                <div class="col-md-4">
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="numero"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-center">
                                    Titulo/Descrição:
                                </div>
                                <div class="col-md-10">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="titulo"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-5 d-flex align-items-center">
                                            Responsável:
                                        </div>
                                        <div class="col-md-7 ps-1">
                                            <select
                                                class="form-select"
                                                name="resp">
                                                <option selected>Joãozinho | Faxineiro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-3 d-flex align-items-center">
                                            Situação:
                                        </div>
                                        <div class="col-md-9 d-flex align-items-center">
                                            <select
                                                class="form-select"
                                                name="status">
                                                <option selected>Em Andamento</option>
                                                <option selected>Concluido</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-center justify-content-end">
                                    <div class="row">
                                        <div class="col-4">
                                            <a
                                                class="btn btn-outline-danger btn-sm"
                                                href="{{ route('home') }}"
                                                role="button">Limpar</a>

                                        </div>
                                        <div class="col-8">
                                            <button
                                                type="submit"
                                                class="btn btn-success btn-sm">
                                                Buscar Tarefas
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center">
                                <h6 class="m-0"><i class="bi bi-card-checklist"></i> Tarefas</h6>
                            </div>
                            <div class="col-4 text-end">
                                @stack('addButton')
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div
                            class="table-responsive">
                            <table
                                class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Número</th>
                                        <th scope="col">Título</th>
                                        <th scope="col">Responsável</th>
                                        <th scope="col">Ações</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Varrer o Chão</td>
                                        <td>Juninho | Faxineiro</td>
                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-success btn-sm">
                                                <i class="bi bi-check"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Varrer o Chão</td>
                                        <td>Pedrinho | Jardineiro</td>
                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-success btn-sm">
                                                <i class="bi bi-check"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

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