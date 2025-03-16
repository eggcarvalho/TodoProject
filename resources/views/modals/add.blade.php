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
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                <div class="mb-3">
                    <label for="">Titulo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        required />
                </div>

                <div class="mb-3">
                    <label for="">Descrição</label>
                    <textarea class="form-control" name="" id="" rows="3" required></textarea>
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
                            <input class="form-check-input" type="radio" name="decideIA" id="acceptIA" />
                            <label class="form-check-label" for="acceptIA"> Sim, desejo que a <b>IA</b> gerencie esta tarefa. </label>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="decideIA"
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
                            <label for="">Responsável</label>
                            <select
                                class="form-select"
                                name="responsible_id"
                                required>
                                <option disabled selected value="">Selecionar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="">Prioridade</label>
                            <select
                                class="form-select"
                                name="responsible_id"
                                required>
                                <option disabled selected value="">Selecionar</option>
                                <option value="1">Baixa</option>
                                <option value="2">Média</option>
                                <option value="3">Alta</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="">Deadline</label>
                            <input
                                type="datetime-local"
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
                <button type="button" class="btn btn-success btn-sm">Salvar</button>
            </div>
        </div>
    </div>
</div>