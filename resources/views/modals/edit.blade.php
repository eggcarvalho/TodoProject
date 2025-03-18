<form id="formUpdate">
    @csrf
    @method('PATCH')
    <input type="hidden" name="taskid" id="taskID">
    <!-- Modal Body -->
    <div
        class="modal fade"
        id="editTask"
        tabindex="-1"


        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div
            class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Alterar Tarefa
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="step-edit step-edit1">
                        <div class="row">
                            <div class="col-6">
                                <h6>Informações da Tarefa</h6>
                                <hr>
                                <div class="mb-3">
                                    <label for="editTitle">Titulo</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="title"
                                        id="editTitle"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label for="editDescription">Descrição</label>
                                    <textarea class="form-control" name="description" id="editDescription" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Informações Gerais</h6>
                                <hr>

                                <div class="mb-3">
                                    <label for="editIA" class="form-label">Criado pela IA?</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        readonly="readonly"
                                        id="editIA" />
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="responsible_id_edit">Responsável</label>
                                            <select
                                                class="form-select"
                                                name="responsible_id"
                                                id="responsible_id_edit">
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
                                            <label for="priorityEdit">Prioridade</label>
                                            <select
                                                class="form-select"
                                                name="priority"
                                                id="priorityEdit">
                                                <option disabled selected value="">Selecionar</option>
                                                <option value="low">Baixa</option>
                                                <option value="mid">Média</option>
                                                <option value="high">Alta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="deadlineEdit">Deadline</label>
                                            <input
                                                type="datetime-local"
                                                id="deadlineEdit"
                                                class="form-control"
                                                name="deadline" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="iaPath">
                            <div class="col-12">
                                <h6>Descrição criada pela IA</h6>
                                <hr>
                                <div class="mb-3">
                                    <textarea class="form-control" name="ia_path" id="iaDescription" rows="3"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="step-edit step-edit2" style="display: none;">
                        <div class="d-flex flex-column gap-5 align-items-center justify-content-center" style="min-height: 300px;">
                            <div
                                class="spinner-border text-primary spinner-border-sm"
                                role="status" style="width: 5rem; height: 5rem;">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <h6 class="text-primary">Carregando...</h6>
                        </div>
                    </div>
                    <div class="step-edit step-edit3" style="display: none;">
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
                <div class="modal-footer edit-footer">

                    <button type="button" class="btn btn-success btn-submit-edit">Atualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>
@push('footer')
<script src="{{ asset('asset/js/edit-modal.js') }}"></script>
@endpush