@push('addButton')
<button
    type="button"
    class="btn btn-success btn-sm"
    data-bs-toggle="modal"
    data-bs-target="#addTask">
    <i class="bi bi-plus"></i> Adicionar Tarefa
</button>
@endpush

<!-- Modal Body -->

<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    <div
        class="modal fade"
        id="addTask"
        tabindex="-1"


        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div
            class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        <i class="bi bi-clipboard-plus"></i> Adicionar Tarefa
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="mb-3">
                        <label for="title">Titulo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="title"
                            id="title"
                            required />
                    </div>

                    <div class="mb-3">
                        <label for="description">Descrição</label>
                        <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="bi bi-exclamation-circle"></i> Você deseja que a <b>IA</b> gerencie esta tarefa?
                        </div>
                        <div class="card-body">
                            <div
                                class="alert alert-warning"
                                role="alert">
                                Obs: A decisão sobre a prioridade da tarefa será baseada nas suas últimas atividades.
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="decideIA" id="acceptIA" value="true" />
                                <label class="form-check-label" for="acceptIA"> Sim, desejo que a <b>IA</b> gerencie esta tarefa. </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="decideIA"
                                    value="false"
                                    id="declineIA" />
                                <label class="form-check-label" for="declineIA">
                                    Não, não desejo que a <b>IA</b> gerencie esta tarefa.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="responsible_id">Responsável</label>
                                <select
                                    class="form-select"
                                    name="responsible_id"
                                    id="responsible_id"
                                    required>
                                    <option disabled selected value="">Selecionar</option>
                                    @forelse ($responsibles as $responsible)
                                    <option value="{{ $responsible->id }}">{{ $responsible->name . ' | ' . $responsible->function }}</option>
                                    @empty
                                    <option disabled>Nenhum responsável cadastrado</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="priority">Prioridade</label>
                                <select
                                    class="form-select"
                                    name="priority"
                                    id="priority"
                                    required>
                                    <option disabled selected value="">Selecionar</option>
                                    <option value="low">Baixa</option>
                                    <option value="mid">Média</option>
                                    <option value="high">Alta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="deadline">Deadline</label>
                                <input
                                    type="datetime-local"
                                    id="deadline"
                                    class="form-control"
                                    name="deadline" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-outline-secondary btn-sm"
                        data-bs-dismiss="modal">
                        Fechar
                    </button>
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
</form>