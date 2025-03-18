@push('addButton')
<button
    type="button"
    class="btn btn-success btn-sm"
    data-bs-toggle="modal"
    data-bs-target="#addTask">
    <i class="bi bi-plus"></i> Adicionar Tarefa
</button>
@endpush


<form id="saveTask">
    @csrf
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

                    <div class="step step1">
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
                    </div>
                    <div class="step step2" style="display: none;">
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
                    </div>
                    <div class="step step3" style="display: none;">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="responsible_id">Responsável</label>
                                    <select
                                        class="form-select"
                                        name="responsible_id"
                                        id="responsible_id">
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
                                        id="priority">
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
                    <div class="step step4" style="display: none;">
                        <div class="d-flex flex-column gap-5 align-items-center justify-content-center" style="min-height: 300px;">
                            <div
                                class="spinner-border text-primary spinner-border-sm"
                                role="status" style="width: 5rem; height: 5rem;">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <h6 class="text-primary">Carregando...</h6>
                        </div>

                    </div>
                    <div class="step step5" style="display: none;">
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <div>
                                Tarefa cadastrada com sucesso.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer add-footer">
                    <button type="button" class="btn btn-outline-info btn-sm backButton" style="display: none;">Retornar</button>
                    <button type="button" class="btn btn-info btn-sm nextButton">Avançar</button>
                    <button type="button" class="btn btn-success btn-sm submitButton" style="display: none">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
</form>

@push('footer')
<script src="{{ asset('asset/js/add-modal.js') }}"></script>
@endpush