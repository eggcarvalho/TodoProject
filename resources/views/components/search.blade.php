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
                                <option disabled selected value="">Selecionar</option>
                                @forelse ($responsibles as $responsible)
                                <option value="{{ $responsible->id }}">{{ $responsible->name . ' | ' . $responsible->function }}</option>
                                @empty
                                <option disabled>Nenhum responsável cadastrado</option>
                                @endforelse
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